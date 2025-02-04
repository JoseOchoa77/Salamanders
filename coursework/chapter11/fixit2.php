<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/10/25
	File:	  fixit2.php
	Purpose:  What's wrong here? The carsSold array is supposed to store 
		four values, containing the cars sold for each quarter of the year. 
		But when you run the program, there is a syntax error! 
		Are we using the right syntax?
		NOTE: you may need to MODIFY the statement $carsSold = array [175, 320, 270, 390];
		but do not REPLACE this statement.
-->

<html>
<head>
	<title>Car Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>CAR SALES</h1>

	<?php
		$carsSold = array(175, 320, 270, 390);

		$totalSales = $carsSold[0] + $carsSold[1] + $carsSold[2] + $carsSold[3];
		
		print("<p>This year we sold $totalSales cars.</p>");

	?>
</body>
</html>
