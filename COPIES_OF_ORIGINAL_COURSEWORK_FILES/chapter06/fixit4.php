<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  What's wrong here? This program is supposed to open a
			  file for reading, read three wage amounts from the file,
			  close the file, calculate the total and average, and display
			  the three wages, total and average. But when the program
			  runs, error messages are generated for lines 24 - 26.

-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$wageFile = fopen("wages1.txt","r");//  open the file containing employee wages
		fclose($wageFile);
		$wage1 = trim(fgets($wageFile));	// reads data for the 1st employee from the file
		$wage2 = trim(fgets($wageFile));	// reads data for the 2nd employee from the file
		$wage3 = trim(fgets($wageFile));	// reads data for the 3rd employee from the file


		$totalWages = $wage1 + $wage2 + $wage3;
		$avgWage = $totalWages/3;

		print("<p>Wage #1: $$wage1<br>");
		print("Wage #2: $$wage2<br>");
		print("Wage #3: $$wage3</p>");
		print("<p>TOTAL WAGES PAID: $$totalWages</p>");
		print("<p>AVERAGE WAGE:     $$avgWage</p>");
	?>
</body>
</html>
