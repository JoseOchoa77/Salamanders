<!DOCTYPE html>
<!--	Author:
		Date:
		File:	weekly-report1.php
		Purpose: Chapter9 Exercise

-->

<html>
<head>
	<title>Weekly Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>Weekly Report</h1>

	<?php
		$paintFile = fopen("weekly-data.txt","r");


		
		print("<p>TOTAL INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($total, 2)."</p>");
		print("<p>AVG DAILY INCOME FROM PAINT CONTRACTS: ");
		print("$".number_format($avgDailyIncome, 2)."</p>");
		print("<p>NUMBER OF DAYS with NO INCOME: $badDays.</p>");
	
?>

</body>
</html>
