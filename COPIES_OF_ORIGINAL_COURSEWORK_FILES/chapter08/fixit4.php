<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  This program works but the logic is wrong. The
			  program is supposed to allocate a 100.00 bonus to those
			  who work more than 40 hours, a 50.00 bonus to those who work
			  more than 20 (except those who qualify for a 100.00 bonus),
			  and a 25.00 bonus for everyone else.
			  But there is an error in the code logic which means
			  that anyone who works more than 20 hours gets a 50.00 bonus,
			  even if they worked more than 40 hours. Can you fix the problem?

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
		$hoursWorked = 15;
		$wage = $hourlyWage * $hoursWorked;

		if ($hoursWorked > 40)
			$bonus = 100.00;

		if ($hoursWorked > 20)
			$bonus = 50.00;
		else
			$bonus = 25.00;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
		print("<p>Your bonus is $ $bonus.</p>");


	?>
</body>
</html>
