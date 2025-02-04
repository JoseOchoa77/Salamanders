<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify3.php
	Purpose:Chapter 11 Exercise

	modify3.html provides the user with a form to submit the cars sold for each quarter. 
	modify3.php uses an array to store the sale numbers, but the current version uses 
	its own quarterly sales figures instead of receiving the values from the form. 
	Modify this code to receive the values from the form into the array. 
	You do not to change modify3.html.

-->
<html>
<head>
	<title>Car Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>CAR SALES</h1>

	<?php
		$carsSold[0] = 175;
		$carsSold[1] = 320;
		$carsSold[2] = 270;
		$carsSold[3] = 390;

		$totalSales = $carsSold[0] + $carsSold[1] + $carsSold[2] + $carsSold[3];
		
		print("<p>This year we sold $totalSales cars.</p>");

	?>
</body>
</html>
