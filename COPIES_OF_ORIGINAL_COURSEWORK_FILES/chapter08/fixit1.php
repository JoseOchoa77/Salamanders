<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? When you run the program the browser
			  DISPLAYS an error message relating to line 25. Can you fix it?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 12.75;
		$hoursWorked = 45;
		$wage = $hourlyWage * $hoursWorked;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");

		if ($hoursWorked > 40) or ($hourlyWage < 8.00)
			print("<p>You also get a $100 bonus.</p>");
	?>
</body>
</html>
