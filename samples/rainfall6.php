<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	rainfall6.php
		Purpose:Example of receiving a file name from an HTML form to select a file
		Input:  name of file received from rainfall5.html and stored in $rainFile
				File containing a year, followed by 12 monthly rainfall amounts
		Output: HTML document containing year, totalRainfall, avgRainfall, highestMonthlyRainfall
		and lowestMonthlyRainfall
-->
<html>
<head>
	<title>RAINFALL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$rainFile = $_POST['rainFile'];	
		
		$rainDataFile =fopen($rainFile,"r");
		$year = trim(fgets($rainDataFile));

		$totalRainfall = 0;
		$highestMonthlyRainfall = 0;
		$lowestMonthlyRainfall = 100;

		for ($count= 1; $count <= 12; $count = $count + 1)
		{
			$nextRainfallAmount = trim(fgets($rainDataFile));
			$totalRainfall = $totalRainfall + $nextRainfallAmount;

			if ($nextRainfallAmount > $highestMonthlyRainfall)
				$highestMonthlyRainfall = $nextRainfallAmount;

			if ($nextRainfallAmount < $lowestMonthlyRainfall)
				$lowestMonthlyRainfall = $nextRainfallAmount;
		}
		fclose($rainDataFile);

		$avgRainfall = $totalRainfall / 12;

		print ("<h1>RAINFALL REPORT: $year</h1>");
		print("<p>TOTAL RAINFALL: ".number_format($totalRainfall,2)."</p>");
		print("<p>AVERAGE MONTHLY RAINFALL: ".number_format($avgRainfall,2)."</p>");
		print("<p>HIGHEST MONTHLY RAINFALL: ".number_format($highestMonthlyRainfall,2)."</p>");
		print("<p>LOWEST MONTHLY RAINFALL: ".number_format($lowestMonthlyRainfall,2)."</p>");		
	?>
</body>
</html>
