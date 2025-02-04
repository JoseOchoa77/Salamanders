<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/10/2025
	File:	modify1.php
	Purpose:Chapter 11 Exercise

	The accounts array stores balances for your checking, savings, and money market 
	accounts. Replace the three statements that assign values to each of the array 
	elements with a single statement that uses the array() function. You do not 
	need to change modify1.html which just runs the program.

-->
<html>
<head>
	<title>Modify Exercise</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>MY ACCOUNTS</h1>

	<?php
		$account = array(775.57, 2275.31, 4554.43);

		print ("<table>");
		print("<tr><td>CHECKING BALANCE: </td><td>$".number_format($account[0], 2)."</td></tr>");
		print("<tr><td>SAVINGS BALANCE: </td><td>$".number_format($account[1], 2)."</td></tr>");
		print("<tr><td>MONEY MKT BALANCE: </td><td>$".number_format($account[2], 2)."</td></tr>");
		print ("</table>");

	?>
</body>
</html>
