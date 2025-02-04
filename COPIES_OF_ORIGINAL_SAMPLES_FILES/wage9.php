<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage9.php
		Purpose:This example demonstrates the use chained if..else structures using
				if..elseif..else to assign one of three posisble value to a bonus.
				A 0.00 bonus is assigned if the hourlyWage is greater than 25.00 or if
				hours worked is less than 20, otherwise if the hours worked is at least
				35 a bonus of	50.00 is assigned, otherwise a bonus of	25.00 is assigned
		Input: 	hourlyWage, hoursWorked
		Output: HTML document that displays hourlyWage, hoursWorked, bonus, weeklyWage
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$hourlyWage = $_POST['hourlyWage'];
		$hoursWorked = $_POST['hoursWorked'];		
	
		if ($hourlyWage >= 25.00 OR $hoursWorked < 20)
			$bonus = 0.00;
		elseif ($hoursWorked >= 35)
			$bonus = 50.00;
		else
			$bonus = 25.00;


		$weeklyWage = $hourlyWage * $hoursWorked + $bonus;

		print("<h1>Wage Report</h1>");
		print("<p>Your hourly wage is $$hourlyWage and you worked
				$hoursWorked hours.</p>");

		print("<p>Your bonus is $$bonus.</p>");
		print("<p>Your wages are $$weeklyWage.</p>");

		print ("<a href=\"wage9.html\">Return to form</a>");
	?>
</body>
</html>
