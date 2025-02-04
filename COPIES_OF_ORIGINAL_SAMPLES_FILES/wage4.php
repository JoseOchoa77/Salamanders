<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage4.php
		Purpose:Demonstrates the use of a simple if..else structure to
				to claculate a 50.00 bonus if the hours worked is at least 35
				or else a 25.00 bonus
		Input: 	hourlyWage, hoursWorked
		Output: HTML document that displays hourlyWage, hoursWorked, bonus, and weeklyWage
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
	
		if ($hoursWorked >= 35)
		{
			$bonus = 50.00;
		}
		else
		{
			$bonus = 25.00;
		}
		$weeklyWage = $hourlyWage * $hoursWorked + $bonus;

		print("<h1>Wage Report</h1>");
		print("<p>Your hourly wage is $$hourlyWage and you worked
			$hoursWorked hours.</p>");
		print("<p>Your bonus is $$bonus.</p>");
		print("<p>Your weekly wage is $$weeklyWage.</p>");
		print ("<a href=\"wage4.html\">Return to form</a>");
	?>
</body>
</html>

