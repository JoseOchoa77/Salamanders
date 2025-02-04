<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	rainfall2.php
		Purpose:Example of using a for loop to count selected values
		Input: File containing a year, followed by 12 monthly rainfall amounts
		Output: HTML document containing year, months with above 2" rainfall
-->
<html>
<head>
	<title>RAINFALL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$rainDataFile = fopen("rainfall2007.txt","r");
		$year = trim(fgets($rainDataFile));
		$countMonths = 0;
		for ($count= 1; $count <= 12; $count = $count + 1)
		{
			$nextRainfall = trim(fgets($rainDataFile));
			if ($nextRainfall > 2) 
			{
			   	$countMonths = $countMonths + 1;
            }
		}
		fclose($rainDataFile);
		print("<h1>RAINFALL REPORT: $year</h1>");
		print("<p>NUMBER OF MONTHS ABOVE 2 INCHES: $countMonths.</p>");
	?>
</body>
</html>
