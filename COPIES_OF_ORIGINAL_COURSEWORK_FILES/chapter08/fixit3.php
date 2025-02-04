<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  This program works but the logic is wrong.
			  The program is supposed to first increase the wage
			  of anyone who earns less than 8.00 to 8.00,
			  and then calculate everyone's bonus regardless
			  of their hourly wage. But the bonus is not
			  being given to anyone who earns less than 8.00
			  Can you fix it?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 7.75;
		$hoursWorked = 20;
		$wage = $hourlyWage * $hoursWorked;

		if ($hourlyWage < 8.00)
			$hourlyWage = 8.00;

		elseif ($hoursWorked < 40)
			$bonus = 50.00;
		else
			$bonus = 100.00;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
		print("<p>Your bonus is $ $bonus.</p>");


	?>
</body>
</html>
