<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/15/2025
	File:	modify2.php
	Purpose:Chapter 12 Exercise

	The accounts array stores balances for your checking, savings, and money market accounts. 
	The index values for the array (0, 1 and 2) are not very meaningful. Change the program 
	to use an associative array, with key values 'checking', 'savings', and 'moneyMarket'.
	Be sure to apply your changes as needed throughout the program! 
	You do not to change modify2.html which just runs the program.
-->
<html>
<head>
	<title>Modify Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>MY ACCOUNTS</h1>

	<?php
		$account['Checking'] = 775.57;
		$account['Savings'] = 2275.31;
		$account['moneyMarket'] = 4554.43;

		print ("<table>");
		print("<tr><td>CHECKING BALANCE: </td><td>$".number_format($account['Checking'], 2)."</td></tr>");
		print("<tr><td>SAVINGS BALANCE: </td><td>$".number_format($account['Savings'], 2)."</td></tr>");
		print("<tr><td>MONEY MKT BALANCE: </td><td>$".number_format($account['moneyMarket'], 2)."</td></tr>");
		print ("</table>");

	?>
</body>
</html>
