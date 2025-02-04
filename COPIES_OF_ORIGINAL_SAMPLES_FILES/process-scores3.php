<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-scores3.php
		Purpose:Process a file containing a list of scores, each on a separate line
		Input: fileName received from process-scores3.html
		Output: 	The number of valid scores in the file (in the range 0 to 100)
				The number of invalid scores in the file
				The average of the valid scores
-->
<html>
<head>
	<title>STUDENT SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> STUDENT SCORES </h1>

	<?php
		$fileName = $_POST['fileName'];	
		
		$sum = 0;
		$validCount = 0;
		$invalidCount = 0;

		$scoreFile =fopen("$fileName","r");	// open the scores file

		$score = trim(fgets($scoreFile));			// read the first line

		while ( !feof($scoreFile) )				// test for EOF
		{
			if ($score >= 0 and $score <= 100)
			{
				$sum = $sum + $score;
				$validCount = $validCount + 1;
			}
			else
				$invalidCount = $invalidCount + 1;

			$score = trim(fgets($scoreFile));		// read the next line
		}

		fclose($scoreFile);					// close the file

		print("<p>Number of valid scores: $validCount<br>");
		print("<p>Number of invalid scores: $invalidCount<br>");

		if ($validCount > 0)
		{
			$average = $sum / $validCount;
			print("<p>Average of valid scores $average</p>");
		}
	?>

</body>
</html>
