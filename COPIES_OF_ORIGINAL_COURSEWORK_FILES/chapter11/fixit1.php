<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? The carsSold array is supposed to store four 
	values, containing the cars sold for each quarter of the year. But when you 
	run the program, there is a syntax error! Are we using the right syntax in 
	our array statements?
-->

<html>
<head>
	<title>Car Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>CAR SALES</h1>

	<?php
		$carsSold(0) = 175;
		$carsSold(1) = 320;
		$carsSold(2) = 270;
		$carsSold(3) = 390;

		$totalSales = $carsSold(0) + $carsSold(1) + $carsSold(2) + $carsSold(3);
		
		print("<p>This year we sold $totalSales cars.</p>");

	?>
</body>
</html>
