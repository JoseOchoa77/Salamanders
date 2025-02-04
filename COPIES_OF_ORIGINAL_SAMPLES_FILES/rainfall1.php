<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	rainfall1.php
		Purpose:Example of using a for loop to accumulate a total
		Input: File containing a year, followed by 12 monthly rainfall amounts
		Output: HTML document containing year, totalRainfall, avgRainfall
-->
<html>
<head>
	<title>RAINFALL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$rainDataFile =fopen("rainfall2007.txt","r");
		$year = trim(fgets($rainDataFile));

		$totalRainfall = 0;
		for ($count= 1; $count <= 12; $count = $count + 1)
		{
			$nextRainfallAmount = trim(fgets($rainDataFile));
			$totalRainfall = $totalRainfall + $nextRainfallAmount;
		}
		fclose($rainDataFile);

		$avgRainfall = $totalRainfall / 12;

		print ("<h1>RAINFALL REPORT: $year</h1>");
		print("<p>TOTAL RAINFALL: $totalRainfall</p>");
		print("<p>AVERAGE MONTHLY RAINFALL: ".number_format($avgRainfall,2)."</p>");
	?>
</body>
</html>
