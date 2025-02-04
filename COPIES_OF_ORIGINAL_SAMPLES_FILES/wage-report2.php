<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage-report2.php
		Purpose:Example of Reading data records from a file
-->
<html>
<head>
	<title>EMPLOYEE WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$timesheetFile =fopen("timesheets.txt","r");

		$employeeRecord1 = trim(fgets($timesheetFile));
		$employeeRecord2 = trim(fgets($timesheetFile));
		$employeeRecord3 = trim(fgets($timesheetFile));

		fclose($timesheetFile);

		list($firstName1, $lastName1, $hours1, $payRate1) = explode (":", $employeeRecord1);
		list($firstName2, $lastName2, $hours2, $payRate2) = explode (":", $employeeRecord2);
		list($firstName3, $lastName3, $hours3, $payRate3) = explode (":", $employeeRecord3);

		$pay1 = $hours1 * $payRate1;
		$pay2 = $hours2 * $payRate2;
		$pay3 = $hours3 * $payRate3;

		$totalPay = $pay1 + $pay2 + $pay3;

		print ("<h1>EMPLOYEE WEEKLY WAGE REPORT </h1>");

		print("<p>$lastName1, $firstName1: $ $pay1.");
		print("<br>$lastName2, $firstName2: $ $pay2.");
		print("<br>$lastName3, $firstName3: $ $pay3. </p>");

		print("<p><strong>TOTAL PAY: $ $totalPay. </strong></p>");

		print (" <p><a href = \"wage-report2.html\">Return to Wage Report 2 form</a></p> ");
	?>

</body>
</html>
