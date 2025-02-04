<!DOCTYPE html>
<!--	Author:
		Date:
		File:	fuel-costs.php
		Purpose: Chapter 9 Exercise
-->

<html>
<head>
	<title>Fuel Cost Calculator</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
    <h1>Fuel Cost Calculator</h1>
	<?php
		$carMake = $_POST['carMake'];
		$carModel = $_POST['carModel'];		
		$mpg = $_POST['mpg'];
		$costPerGallon = $_POST['costPerGallon'];
		
		print("<p>CAR MAKE: ". $carMake."<br>");
		print("<p>CAR MODEL: ".$carModel."<br>");
		print("<p>Miles Per Gallon: ". $mpg."<br>");
		print("<p>Fuel Cost Per Gallon: $". number_format($costPerGallon,2)."</p>");
		
		
		// Add a table here that uses a FOR loop to display the fuel costs
		// for 100 to 1000 miles of travel in 100 mile increments
		// See instructions in the textbook for details.
	

		
			
	?>

</body>
</html>
