<!DOCTYPE html>
<!--	Author: Mike O"Kane
		Date:	August 15, 2007
		File:	wage-report1.php
		Purpose:Example of Reading a single data record from a file
-->
<html>
<head>
	<title>EMPLOYEE WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		$timesheetFile =fopen("timesheet.txt","r");

		$employeeRecord = trim(fgets($timesheetFile));

		fclose($timesheetFile);

		list($firstName, $lastName, $hours, $payRate) = explode (":", $employeeRecord);

		$pay = $hours * $payRate;

		print ("<h1>EMPLOYEE WEEKLY WAGE REPORT </h1>");

		print("<p>$lastName, $firstName: $$pay.</p>");

		print (" <p><a href = \"wage-report1.html\">Return to Wage Report 1 form</a></p> ");
	?>
</body>
</html>
