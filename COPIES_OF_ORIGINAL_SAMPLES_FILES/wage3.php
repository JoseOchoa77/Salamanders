<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage3.php
		Purpose:This example demonstrates the use of an if structure.
				If the hourly wage is less than 8.00 it is updated to 8.00,
				otherwise the hourlyWage is unchanged.
				The weekly wage is then calculated and displayed.
		Input: 	hourlyWage, hoursWorked
		Output: HTML document that displays hourlyWage, hoursWorked, weeklyWage
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
		{
			$hourlyWage = 8.00;
		}

		$weeklyWage = $hourlyWage * $hoursWorked;

		print("<h1>Wage Report</h1>");
		print("<p>Your hourly wage is $$hourlyWage and you worked
				$hoursWorked hours.</p>");

		print("<p>Your wages are $$weeklyWage.</p>");

		print ("<a href=\"wage3.html\">Return to form</a>");
	?>
</body>
</html>
