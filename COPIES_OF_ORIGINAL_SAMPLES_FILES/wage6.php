<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage6.php
		Purpose:This example demonstrates the use of a simple if..else structure
				to test a password. If the password is correct, the wage is processed,
				oerthwise an error message is generated.
		Input: 	hourlyWage, hoursWorked, userPassword from wage6.html
		Output: HTML document that displays hourlyWage, hoursWorked, weeklyWage
				or an error message

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
		$userPassword = $_POST['userPassword'];

		print("<h1>Wage Report</h1>");
		if ($userPassword == "employee")
		{
			$weeklyWage = $hourlyWage * $hoursWorked;

			print("<p>Your hourly wage is $$hourlyWage and you worked
				$hoursWorked hours.</p>");
			print("<p>Your wages are $$weeklyWage.</p>");
		}
		else
		{
			print("<p><strong>YOU ENTERED AN INVALID PASSWORD!</strong></p>");
			print("<p>Please try again</p>");
		}
		print ("<a href=\"wage6.html\">Return to form</a>");
	?>

</body>
</html>
