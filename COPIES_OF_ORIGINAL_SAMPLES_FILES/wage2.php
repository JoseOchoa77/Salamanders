<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage2.php
		Purpose:Calculates and displays a weekly wage
		Input: none
		Output: HTML document that displays hourlyWage, hoursWorked, weeklyWage

-->


<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Wage Report</h1>

	<?php
		$hourlyWage = $_POST['hourlyWage'];
		$hoursWorked = $_POST['hoursWorked'];		
		
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $$hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $$wage.</p>");
	?>

</body>
</html>
