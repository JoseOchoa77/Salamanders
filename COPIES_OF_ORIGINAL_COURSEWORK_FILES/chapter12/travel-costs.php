<!DOCTYPE html>
<!--Author:
	Date:
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
		
		
		

		$farePerPerson = ;
		$hotelPerNight = ;
		
		print ("<h1>TRAVEL COSTS for $destination</h1>");
		print ("<p>The air fare is ".number_format($farePerPerson, 2)." per person</p>");
		print ("<p>The hotel rates are $".number_format($hotelPerNight, 2)." per 
					night.</p>");
	?>
</body>
</html>
