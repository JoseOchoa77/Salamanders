<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  What's wrong here? The program is generating an error message
	for line 40. That doesn't make sense. What is actually happening is that
	there is a problem before that but the processor can't figure out where
	the problem is. Can you?
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
		$hoursWorked = 30;
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


	?>
</body>
</html>
