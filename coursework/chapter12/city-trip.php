<!DOCTYPE html>
<!--	
	Author: Jose Ochoa
	Date: 01/16/25
	File: city-trip.php
	Purpose: Chapter 12 Exercise
-->

<html>
<head>
	<title>City Trip</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php

    $distance = array("Atlanta" => 880, "Boston" => 225, "Chicago" => 788,  "Detroit" => 614, "Miami" => 1275);
    $mpg = $_POST['mpg'];
    $costPerGallon = $_POST['costPerGallon'];
    $city = $_POST['city'];
    
    $fuelCost = $distance[$city] / $mpg * $costPerGallon;

    print("The city you would like to travel to is $city.<br> The distance to $city is ".$distance[$city]." miles.<br> The fuel cost for the entire trip is $".number_format($fuelCost, 2).".");

		// Add your code here		
	?>

</body>
</html>
