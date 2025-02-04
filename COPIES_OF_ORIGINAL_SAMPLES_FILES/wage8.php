<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage8.php
		Purpose:This example demonstrates the use chained if..else structures
				to perform a range of input validation tests
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

		print("<h1>Wage Report</h1>");

		if ( empty($hourlyWage) OR empty($hoursWorked) )
			print("<p class=\"alert\">ERROR: Input is missing, please resubmit</p>");
			
		elseif ( !is_numeric($hourlyWage) OR !is_numeric($hoursWorked) )
			print("<p class=\"alert\">ERROR: Non-numeric input found, please resubmit.</p>");
			
		elseif ($hourlyWage < 7.25)
			print("<p class=\"alert\">ERROR: Hourly wage is below minimum wage, please resubmit.</p>");
			
		elseif ($hoursWorked < 0 or $hoursWorked > 60 )
			print("<p class=\"alert\">ERROR: Hours worked must be in range 0 .. 60, please resubmit</p>");
			
        else // no errors so process the pay
		{
			if ($hourlyWage < 8.00)
				$hourlyWage = 8.00;

			if ($hourlyWage < 10.00 AND $hoursWorked >= 35)
				$bonus = 50.00;
			else
				$bonus = 25.00;

			$weeklyWage = $hourlyWage * $hoursWorked + $bonus;
			print("<p>Your hourly wage is $$hourlyWage and you worked
				$hoursWorked hours.</p>");
			print("<p>Your bonus is $$bonus.</p>");
			print("<p>Your weekly wage is $$weeklyWage.</p>");
		}

		print ("<p><a href=\"wage8.html\">Return to form</a></p>");
	?>
</body>
</html>

