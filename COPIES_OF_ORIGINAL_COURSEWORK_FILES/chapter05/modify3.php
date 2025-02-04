<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify3.php
	Purpose:Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify3.html) and a PHP progam (modify3.php).

	modify3.html should include a form that prompts the user for the number
	of adult movie tickets they wish to purchase AND the number of children's
	tickets that they wish to purchase, then submits these to modify3.php
	for processing. modify3.html currently contains code that only prompts for
	the number of adult movie tickets.

	modify3.php should: receive the two values from the $_POST array;
	calculate the total cost (each adult ticket sells
	for 6.50, each child ticket sells for 4.50); display the number of
	adult tickets purchased, the number of children's tickets purchased,
	and the total cost. modify3.php currently contains code that processes
	only adult tickets.

-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify3</h1>

	<?php
		$adultTickets = $_POST['adultTickets'];
		$totalCost = $adultTickets * 6.50;
		print("<p>You ordered $adultTickets adult tickets</p>");
		print("<p>Your cost is $$totalCost.</p>");
	?>

</body>
</html>
