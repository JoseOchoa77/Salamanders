<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify4.php
	Purpose:Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify4.html) and a PHP program (modify4.php).

	modify4.html should include a form that prompts the user for a purchase
	amount, then submits this to modify4.php for processing. modify4.html
	has been provided and can be used as-is.

	modify4.php should: calculate a reduced purchase amount based on a
	25% discount (this is 0.75 times the purchase amount); calculate the
	tax on the reduced amount (0.07 times the reduced amount); calculate the
	total cost; display the reduced purchase amount, the tax, and total cost.
	modify4.php currently contains code that does not calculate the discount.
	Note the tax should not be applied until after the discount has been
	taken.

-->

<html>
<head>
	<title>Modify4</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify4</h1>

	<?php
		$purchaseAmount = $_POST['purchaseAmount'];

		$tax = $purchaseAmount * 0.07;
		$total = $tax + $purchaseAmount;

		print("<p>Purchase Amount: $$purchaseAmount<br>");
		print("Tax: $$tax<br>");
		print("Total Cost: $$total</p>");

	?>

</body>
</html>
