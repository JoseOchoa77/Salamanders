<!DOCTYPE html>
<!--Author:
	Date:
	File:	  inventory.php
	Purpose:
	
-->

<html>
<head>
	<title>Paint Inventory</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$searchColor = $_POST['searchColor'];
		
		$paintInventory [0] = 65;
		$paintInventory [1] = 35;
		$paintInventory [2] = 15;
		$paintInventory [3] = 6;
		$paintInventory [4] = 15;
		$paintInventory [5] = 2;
		$paintInventory [6] = 0;
		$paintInventory [7] = 4;
		$paintInventory [8] = 2;
		$paintInventory [9] = 14;
		
		print ("<h1>Inventory of $searchColor paint</h1>");

		// Your code here..
		
	?>
</body>
</html>
