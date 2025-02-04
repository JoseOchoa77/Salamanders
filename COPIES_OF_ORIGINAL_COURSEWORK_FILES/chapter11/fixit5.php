<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here? Now we are using a loop to accumulate the total 
	of the  values in the carsSold array. But when you run the program, the result 
	is incorrect! Hint: what's wrong with the loop heading?
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

		$totalSales = 0;
		for ($i = 0; $i < sizeof($totalSales); $i=$i+1)
		{
			$totalSales = $totalSales + $carsSold[$i];
		}
		print("<p>This year we sold $totalSales cars.</p>");

	?>
</body>
</html>
