<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit2.php
	Purpose:  What's wrong here? The program is giving a 100.00 bonus
	 		  although the hours worked is not more than 40!
			  Can you fix it? Hint: the problem is that only the
			  FIRST statement after if ($hoursWorked > 40) is
			  associated with the test, but we want the TWO statements
			  following the test to only be executed if the test is true.
			  How do we accomplish this? What is missing?
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
		$hoursWorked = 20;
		$wage = $hourlyWage * $hoursWorked;

		if ($hoursWorked > 40)

			print("<p>Since you worked more than 40 hours you also get a $100 bonus.</p>");
			$wage = $wage + 100;

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $ $wage.</p>");


	?>
</body>
</html>
