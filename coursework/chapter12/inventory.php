<!DOCTYPE html>
<!--	
	Author:
	Date:
	File:	 inventory.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>Paint Inventory</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$searchColor = $_POST['searchColor'];
		
		$inventory ['white'] = 65;
		$inventory ['cream'] = 35;
		$inventory ['beige'] = 15;
		$inventory ['yellow']= 6;
		$inventory ['green'] = 15;
		$inventory ['red'] 	= 2;
		$inventory ['maroon']= 0;
		$inventory ['blue'] = 4;
		$inventory ['teal'] = 2;
		$inventory ['gray'] = 14;
		
		$cansInStock = ;
		
		print ("<h1>$searchColor</h1>");
		print ("<p>We have $cansInStock cans of this color in stock.</p>");
		
	?>
</body>
</html>
