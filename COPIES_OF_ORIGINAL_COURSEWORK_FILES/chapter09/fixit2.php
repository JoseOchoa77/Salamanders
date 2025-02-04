<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit2.php
	Purpose:  This program is supposed to show employee who
				earn 10.75 an hour how much they  will earn
				for working anywhere between 20 and 40 hours
				a week, but it doesn't display anything
				except the heading (in fact it is not looping
				at all). Can you fix it?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$hourlyWage = 10.75;
		for ($hoursWorked = 20; $hoursWorked >= 40; $hoursWorked = $hoursWorked + 1)
		{
			$wage = $hoursWorked * $hourlyWage;
			print ("If you work $hoursWorked hours, you will earn $$wage<br>");
		}

	?>
</body>
</html>
