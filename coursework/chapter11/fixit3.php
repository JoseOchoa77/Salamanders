<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/10/25
	File:	  fixit3.php
	Purpose:  What's wrong here? The program is supposed to display the number of 
	cars sold in the second quarter but it's displaying the wrong number!
-->

<html>
<head>
	<title>Car Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>CAR SALES</h1>

	<?php
		$carsSold[0] = 175;
		$carsSold[1] = 320;
		$carsSold[2] = 270;
		$carsSold[3] = 390;
	
		print("<p>We sold ".$carsSold[1]." cars in the second quarter.</p>");
	?>
</body>
</html>
