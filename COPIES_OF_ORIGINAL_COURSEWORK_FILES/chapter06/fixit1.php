<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? This program is supposed to open a
			  file for reading, read three wage amounts from the file,
			  close the file, calculate the total and average, and display
			  the three wages, total and average. But when the program
			  runs, three errors are generated. Something is wrong with
			  lines 23, 24 and 25...Hint: how do you read a line from a file?
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$wageFile = fopen("wages1.txt","r");	// open the file containing employee wages
		$wage1 = fputs($wageFile);		// read the first wage from the file
		$wage2 = fputs($wageFile);		// read the second wage from the file
		$wage3 = fputs($wageFile);		// read the third wage from the file
		fclose($wageFile);

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
