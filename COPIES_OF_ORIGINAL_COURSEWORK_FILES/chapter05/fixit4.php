<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  What's wrong here? The program runs but it is displaying
	          the variable names instead of their values!
	          What is wrong with the print statements?

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
		$hoursWorked = 19;
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $ hourlyWage and you worked
		hoursWorked hours.</p>");
		print("<p>You wages are $ wage.</p>");
	?>
</body>
</html>
