<!DOCTYPE html>
<!--	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	process-survey.php
	Purpose: Process a file containing smoking Survey data
	Inputs: Name of file containing the survey data (received from process-survey.html)
	Ouptuts: Number of surveys collected
			Number and percentage of survey takers who have never smoked
			Number and percentage of survey takers who have smoked
			Number of survey takers who are heavy smokers (smoke 20 or more
			cigarettes a day for at least 5 years)
			Average number of cigarettes smoked daily by survey takers who smoke
			Average number of years that survey takers who smoke have smoked
-->
<html>
<head>
	<title>SMOKING SURVEY REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
    <!--    example of an internal style sheet, used here to over-ride the 
            border setting for tables in sample.css so no border is displayed 
    -->
    <style>table, th, td {border:none;}</style>
</head>
<body>

	<?php
		$fileName = $_POST['fileName'];	
		
		$countHeavySmokers = 0;
		$countSmokers = 0;
		$countNonSmokers = 0;
		$totalSmokedDaily = 0;
		$totalYearsSmoked = 0;

		$surveyFile =fopen("$fileName", "r");	// open the scores file
		$nextSurvey = trim(fgets($surveyFile));		// read the first line

		while ( !feof($surveyFile) )			// test for EOF
		{

			list($firstName, $lastName, $yearsSmoked, $smokedDaily) = 
												explode (":", $nextSurvey);

			if ($smokedDaily == 0)
			{
				$countNonSmokers = $countNonSmokers + 1;
			}
			else
			{
				$countSmokers = $countSmokers + 1;
				$totalSmokedDaily = $totalSmokedDaily + $smokedDaily;
				$totalYearsSmoked = $totalYearsSmoked + $yearsSmoked;

				if ($smokedDaily >= 20 AND $yearsSmoked >= 5)
				{
						$countHeavySmokers = $countHeavySmokers + 1;
				}
			}

			$nextSurvey = trim(fgets($surveyFile));	// read the next line
		}
		fclose($surveyFile);					// close the file

		$totalSurveys = $countSmokers + $countNonSmokers;
		$percentNonSmokers = 100 * $countNonSmokers / $totalSurveys;
		$percentSmokers = 100 * $countSmokers / $totalSurveys;
		$avgSmokedDaily = $totalSmokedDaily / $countSmokers;
		$avgYearsSmoked = $totalYearsSmoked / $countSmokers;

		print ("<h1>SMOKING SURVEY REPORT</h1>");
		
		print("<p>(Report generated from data file: 
							<strong>$fileName</strong>)</p>");
		print ("<table>");
		print ("<tr><td>Total number of people surveyed:</td>
				<td>$totalSurveys</td></tr>");
		print ("<tr><td>Number of smokers:</td>
				<td>$countSmokers</td></tr>");
		print ("<tr><td>Number of non-smokers:</td>
				<td>$countNonSmokers</td></tr>");
		print ("<tr><td>Percentage of smokers:</td>
				<td>$percentSmokers %</td></tr>");
		print ("<tr><td>Percentage of non-smokers:</td>
				<td>$percentNonSmokers %</td></tr>");
		print ("<tr><td>Heavy smokers (20+ a day for at least 5 years):</td>
				<td>$countHeavySmokers</td></tr>");
		print ("<tr><td>Average cigarettes smoked daily by smokers:</td>
				<td>$avgSmokedDaily</td></tr>");
		print ("<tr><td>Average years that smokers have smoked:</td>
				<td>$avgYearsSmoked</td></tr>");
		print ("</table>");
		
	?>
</body>
</html>
