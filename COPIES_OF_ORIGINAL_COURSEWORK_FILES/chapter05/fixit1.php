<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? When you run the program the browser
			  DISPLAYS the three PHP assignment statements instead
			  of executing them. Then it does not display the results
			  correctly! HINT: remember that ALL PHP code must be
			  enclosed within .... ????
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

		$hourlyWage = 15.75;
		$hoursWorked = 19;
		$wage = $hourlyWage * $hoursWorked;
	<?php

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
	?>
</body>
</html>
