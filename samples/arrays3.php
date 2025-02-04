<!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	August 15, 2007
		File:	arrays3.php
		Purpose:PHP Practice
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

		for ($i = 0; $i < 12; $i = $i + 1)
		{
			$rainfall [$i] = trim(fgets($rainDataFile));
		}

		fclose($rainDataFile);

		$totalRainfall = 0;
		for ($i = 0; $i < sizeof($rainfall); $i = $i + 1)
		{
			$totalRainfall = $totalRainfall + $rainfall [$i];

			if ($i == 0 OR $rainfall [$i]  > $highestRainfall)
				$highestRainfall = $rainfall [$i];

			if ($i == 0 OR $rainfall [$i]  < $lowestRainfall)
				$lowestRainfall = $rainfall [$i];
		}

		$avgRainfall = $totalRainfall / 12;

		print ("<h1>RAINFALL SUMMARY FOR $year</h1>");
		print("<p>TOTAL RAINFALL: $totalRainfall.</p>");
		print("<p>AVERAGE MONTHLY RAINFALL: ".number_format($avgRainfall,2)."</p>");
		print("<p>HIGHEST MONTHLY RAINFALL:
					$highestRainfall.</p>");
		print("<p>LOWEST MONTHLY RAINFALL: $lowestRainfall.</p>");
	?>
</body>

</html>
