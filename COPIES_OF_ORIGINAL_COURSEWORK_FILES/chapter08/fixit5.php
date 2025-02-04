<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  This program works but the logic is wrong. If the
			  hours worked is a negative number, the program
			  displays an error message but then still processes
			  the wage and displays the results. How you you fix this
			  so that if $hoursWorked is negative, the next
			  if..else structure and the wage output is skipped?

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
		$hoursWorked = -1;
		$wage = $hourlyWage * $hoursWorked;

		if ($hoursWorked < 0)
			print("<p><h1>ERROR: You can't work negative hours!</h1></p>");

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
