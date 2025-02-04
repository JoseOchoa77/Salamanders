<!DOCTYPE html>
<!--Author:
	Date:
	File:	process-order.php
	Purpose:Chapter 6 Exercise

-->

<html>
<head>
	<title>Save The World Software</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Save The World: Process Order</h1>

	<?php
		


		$subtotal = $numCopies * 35.00;
		$tax = $subtotal * 0.07;
		$shippingHandling = $numCopies * 1.25;
		$total = $subtotal + $tax + $shippingHandling;

		print("<p><strong>SaveThe World Software INVOICE:</strong></p>");
		print("<p>Operating System: $os<br>");
		print("Number of Copies Ordered: $numCopies<br>");
		print("Sub-total: $".number_format($subtotal, 2)."<br>");
		print("Sales tax: $".number_format($tax, 2)."<br>");
		print("Shipping and handling: $".number_format($shippingHandling, 2)."</p><hr>");
		print("<p><strong>TOTAL DUE: $".number_format($total, 2)."</strong></p>");

	?>

</body>
</html>
