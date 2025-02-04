<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here?
			  The browser is DISPLAYING the PHP code instead of executing it!
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

		print("<p>Your hourly wage is $ $hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $$wage.</p>");

</body>
</html>
