<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  What's wrong here? The program does not display the
	hourly wage, hours worked or weekly age	if the hours worked is
	greater than 40. It only displays this information if the hours worked
	is 40 or less..
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

		if ($hoursWorked > 40)
		{
			print("<p>Since you worked more than 40 hours you also get a $100 bonus.</p>");
			$wage = $wage + 100;
		}
		else
		{
			print("<p>You only get a bonus if you work more than 40 hours.</p>");

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");
		}


	?>
</body>
</html>
