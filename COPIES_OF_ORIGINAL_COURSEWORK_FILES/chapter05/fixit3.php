<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  What's wrong here? When your run this program you get an error message!
			  The error is actually on line 20 but the processor did know
			  there was a problem until it read the next line.
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 15.75;
		$hoursWorked = 19
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
	?>
</body>
</html>
