<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify2.php
	Purpose:Chapter 7 Exercise

	modify2.html asks the user to enter the number of
	adult and children's tickets they wish to purchase. modify2.php
	processes the order.

	Change modify2.php so that, if at least two children's tickets
	are purchased, the program adds the message
	"<p>We hope your kids enjoy the show!</p>"
	at the end of the existing output.

-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$adultTickets = $_POST['adultTickets'];
		$childTickets = $_POST['childTickets'];

		$totalCost = $adultTickets * 6.50 + $childTickets * 4.50;

		print("<p>You ordered $adultTickets adult tickets and
		$childTickets children's tickets.</p>");
		print("<p>Your cost is $$totalCost.</p>");

	?>

</body>
</html>
