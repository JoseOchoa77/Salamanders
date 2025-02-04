<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage5.php
		Purpose:This example demonstrates the combination of an if structure and an
				if..else stucture in a single program.
				The if structure is used to update an hourlywage if needed
				The if...else  structure is used to assign a bonus based on hours worked
		Input: 	hourlyWage, hoursWorked
		Output: HTML document that displays hourlyWage, hoursWorked, bonus weeklyWage
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

		if ($hourlyWage < 8.00)
			$hourlyWage = 8.00;

		if ($hoursWorked >= 35)
			$bonus = 50.00;
		else
			$bonus = 25.00;

		$weeklyWage = $hourlyWage * $hoursWorked + $bonus;

		print("<h1>Wage Report</h1>");
		print("<p>Your hourly wage is $$hourlyWage and you worked
			$hoursWorked hours.</p>");
		print("<p>Your bonus is $$bonus.</p>");
		print("<p>Your weekly wage is $$weeklyWage.</p>");
		print ("<p><a href=\"wage5.html\">Return to form</a></p>");
	?>
</body>
</html>
