<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit2.php
	Purpose:  This program works but the logic is wrong. It is
			  supposed to give a $100 bonus to anyone when EITHER
			  of the following conditions are true:
			  (1) The employee works  more than 40 hours
			  (2) The employee earns less than 8.00 hourly.
			  Right now it only give the bonus
			  when BOTH of these conditions are true.
			  Can you fix it?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 10.75;
		$hoursWorked = 50;
		$wage = $hourlyWage * $hoursWorked;

		if ($hoursWorked > 40 and $hourlyWage < 8.00)
		{
			print("<p>You get a $100 bonus.</p>");
			$wage = $wage + 100;
		}
		else
			print("<p>No bonus this week</p>");

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");


	?>
</body>
</html>
