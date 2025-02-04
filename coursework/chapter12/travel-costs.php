<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/15/25
	File:	 travel-costs.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>TRAVEL COSTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$destination = $_POST['destination'];

    $airFare = array ("Barcelona" => 875.00, "Cairo" => 950.00, "Rome" => 875.00, "Tokyo" => 1575.00);

    $hotel = array ("Barcelona" => 85.00, "Cairo" => 98.00, "Rome" => 110.00, "Tokyo" => 240.00);

		print ("<h1>TRAVEL COSTS for $destination</h1>");
		print ("<p>The air fare is $".number_format($airFare[$destination], 2)." per person</p>");
		print ("<p>The hotel rates are $".number_format($hotel[$destination], 2)." per night.</p>");
	?>
</body>
</html>
