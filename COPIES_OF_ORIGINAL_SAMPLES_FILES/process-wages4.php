<!DOCTYPE html>
<!--		Author: 	Mike O'Kane
		Date:	August 15, 2007
		File:		process-wages4.php
		Purpose:	Process a file of timesheets and calculates and 
				display the average hours worked

-->
<html>
<head>
	<title>WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1> WEEKLY WAGE REPORT </h1>
	<?php
		$fileName = $_POST['fileName'];	
		
		$sum = 0;
		$count = 0;

		$timesheetFile =fopen("$fileName","r");	// open the scores file

		$empRecord = trim(fgets($timesheetFile));		// read the first line

		while ( !feof($timesheetFile) )			// test for EOF
		{
			list($firstName, $lastName, $hours, $payRate) = explode (":", $empRecord);
			$sum = $sum + $hours;
			$count = $count + 1;

			$empRecord = trim(fgets($timesheetFile));	// read the next line
		}
		fclose($timesheetFile);					// close the file

		if ($count > 0)
		{
			$averageHours = $sum / $count;
			print("<p>AVERAGE HOURS WORKED: ".number_format($averageHours, 2)."</p>");
		}
		else
			print("<p>NO RECORDS FOUND</p>");
	?>
	<p><a href = "process-wages4.html">Process another file</a></p>
</body>
</html>
