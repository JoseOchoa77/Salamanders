<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here? The program is supposed to display
	"You did not work this week" if the hours worked is 0
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
		$hoursWorked = 0;


		if ($hoursWorked = 0)
			print("<p>You did not work this week</p>");
		else
		{
			$wage = $hourlyWage * $hoursWorked;
			print("<p>Your hourly wage is $ $hourlyWage and you worked
			$hoursWorked hours.</p>");
			print("<p>Your wages are $ $wage.</p>");
		}

	?>
</body>
</html>
