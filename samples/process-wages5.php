<!DOCTYPE html>
<!--		Author: 	Mike O'Kane
		Date:	August 15, 2007
		File:	process-wages5.php
		Purpose:Process a file of timesheets and calculates and display 
		the average hours worked by employeew who earn less than $12.00
-->
<html>
<head>
	<title>WEEKLY WAGE REPORT</title>
	<link rel="stylesheet" type="text/css" href="sample.css">
</head>
<body>
<h1> WEEKLY WAGE REPORT </h1>
<?php

$fileName = $_POST['fileName'];

$sum = 0;
$count = 0;

$timesheetFile = fopen("$fileName","r");

$empRecord = trim(fgets($timesheetFile));	

while ( !feof($timesheetFile) )		
{
	list($firstName, $lastName, $hours, $payRate) =
				explode(":", $empRecord);
	if ($payRate < 12.00)
	{
		$sum = $sum + $hours;
		$count = $count + 1;
	}
$empRecord = trim(fgets($timesheetFile));
}
fclose($timesheetFile);

if ($count > 0)
{
	$averageHours = $sum / $count;
	print("<p>AVERAGE HOURS WORKED BY EMPLOYEES
		 EARNING LESS THAN $12.00: ".number_format($averageHours, 2)."</p>");
}
else
	print("<p>NO EMPLOYEES EARN LESS THAN $12.00</p>");
?>
</body>
</html>
