<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	wage11.php
		Purpose:Uses WeeklyPay objects to process two employee wages
		Input:
		Output:
-->

<html>
<head>
	<title>EMPLOYEE WAGES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>EMPLOYEE WAGES</h1>

<?php
	include ("inc-weekly-pay-object.php");

	$emp1 = new WeeklyPay();
	$emp2 = new WeeklyPay();

	$emp1->setID("111-22-3333");
	$emp1->setHoursWorked(40);
	$emp1->setHourlyWage(10.00);
	$emp1->setNumExemptions(2);

	$emp2->setID("222-33-4444");
	$emp2->setHoursWorked(20);
	$emp2->setHourlyWage(15.00);
	$emp2->setNumExemptions(0);

	$emp1ID = $emp1->getID();
	$emp1GrossPay = $emp1->getGrossPay();
	$emp1Tax = $emp1->getFedWithholding();
	$emp1NetPay = $emp1->getNetPay();

	print ("<p><strong>Employee: $emp1ID</strong><br>");
	print ("Gross Pay = $$emp1GrossPay<br>");
	print ("Federal Tax = $$emp1Tax<br>");
	print ("Net Pay = $$emp1NetPay</p>");

	print ("<p><strong>Employee: ".$emp2->getID()."</strong><br>");
	print ("Gross Pay = $".$emp2->getGrossPay()."<br>");
	print ("Federal Tax = $".$emp2->getFedWithholding()."<br>");
	print ("Net Pay = $".$emp2->getNetPay()."</p>");
?>

</body>
</html>

