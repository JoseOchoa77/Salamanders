<!DOCTYPE html>
<!--Author:
	Date:
	File:	travel.php
	Purpose:Chapter 13 Exercise

-->


<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Travel</h1>

	<?php
		$destination = $_POST['destination'];
		$numTravelers = $_POST['numTravelers'];
		$numNights = $_POST['numNights'];

		$airFare =
		$hotelRate =

		$ticketCost =
		$hotelCost =


		$totalCost = $ticketCost + $hotelCost;

		print("<p>Destination: $destination<br>");
		print("Number of people: $numTravelers<br>");
		print("Number of nights: $numNights<br>");
		print("Airline Tickets: $".number_format($ticketCost, 2)."<br>");
		print("Hotel Charges: $".number_format($hotelCost, 2)."</p>");
		print("<p><strong>TOTAL COST: $".number_format($totalCost, 2)."</strong></p>");

	?>

</body>
</html>
