<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage7.php
		Purpose:This example demonstrates input validation by testing
				the values of two variables input by the user.
		Input: 	hourlyWage, hoursWorked
		Output: HTML document that outputs either hourlyWage, hoursWorked and weeklyWage
				or else an error message.
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

		print("<h1>Wage Report</h1>");

		if ( empty($hourlyWage) OR empty($hoursWorked) )
			print("ERROR: Input is missing!");
		elseif ( !is_numeric($hourlyWage) OR !is_numeric($hoursWorked) )
			print("ERROR: Non-numeric input found!");
		elseif ($hourlyWage < 7.25)
			print("ERROR: Hourly wage is below minimum wage!");
		elseif ($hoursWorked <= 0 )
			print("ERROR: Hours worked is less than 0!");
		else
		{
			if ($hourlyWage < 8.00)
				$hourlyWage = 8.00;

			if ($hoursWorked >= 35)
				$bonus = 50.00;
			else
				$bonus = 25.00;

			$weeklyWage = $hourlyWage * $hoursWorked + $bonus;
			print("<p>Your hourly wage is $$hourlyWage and you worked
				$hoursWorked hours.</p>");
			print("<p>Your bonus is $$bonus.</p>");
			print("<p>Your weekly wage is $$weeklyWage.</p>");
		}

		print ("<p><a href=\"wage7.html\">Return to form</a></p>");
	?>
</body>
</html>

