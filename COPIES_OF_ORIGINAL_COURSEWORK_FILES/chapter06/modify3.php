<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify3.php
	Purpose:Chapter 6 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify3.html) and a PHP program (modify3.php).

	modify3.html includes a form that consists only of a Submit button
	When the button is pressed, modify3.php runs and opens the file
	tickets.txt which contains a list of three ticket orders.
	The program reads the ticket order on the first line, multiplies this
	by 6.50 (the price of each ticket) to get the cost of the sale, and
	displays the cost of the sale.

	Modify modify3.php so that it reads and displays all three ticket orders
	and displays the cost of each sale AND also the total sales.

-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify3</h1>

	<?php
		$ticketFile = fopen("tickets.txt","r");	// open the file for read operations
		$ticketOrder1 = trim(fgets($ticketFile));			// read a line from the file
		fclose($ticketFile);

		$ticketSale1 = $ticketOrder1 * 6.50;

		print("<p>TICKET SALE 1: $$ticketSale1</p>");

	?>

</body>
</html>
