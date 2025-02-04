<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage10.php
		Purpose:This example demonstrates the use of multiple if..else structures,
				combining the requirements for wage6.php, wage7.php and wage9.php
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
	
		if ($hourlyWage > 7.25 AND $hoursWorked > 0)
		{

			if ($hourlyWage < 8.00)
			{
				$hourlyWage = 8.00;
			}

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
		}
		else
		{
			print("<h1>Input Error</h1>");
			print ("<p>There is a problem with your input.
				You entered $hourlyWage (hourly wage) and
				$hoursWorked (hours worked)</p>");
		}

		print ("<a href=\"wage10.html\">Return to form</a>");
	?>
</body>
</html>
