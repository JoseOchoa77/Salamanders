<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here? This program is supposed to open a
			  file for reading, read three first names. last names, and
			  wage amounts from the file,
			  close the file, calculate the total and average, and display
			  the employees' names and wages, total and average. But when the
			  program runs, the output is very strange!

			  Hint: Look at the wages2.txt file to see how the data is stored
			  Now look at how this data is being parsed - the problem has to do
			  with the explode() functions.
-->

<html>
<head>
	<title>Wage Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>WAGE REPORT</h1>

	<?php
		$wageFile = fopen("wages2.txt","r");	// open the file containing employee wages

		$employee1 = trim(fgets($wageFile));	// reads data for the 1st employee from the file
		$employee2 = trim(fgets($wageFile));	// reads data for the 1st employee from the file
		$employee3 = trim(fgets($wageFile));	// reads data for the 1st employee from the file
		fclose($wageFile);

		list($firstName1, $lastName1, $wage1) = explode(":", $employee1);
		list($firstName2, $lastName2, $wage2) = explode(":", $employee2);
		list($firstName3, $lastName3, $wage3) = explode(":", $employee3);

		$totalWages = $wage1 + $wage2 + $wage3;
		$avgWage = $totalWages/3;

		print("<p>$lastName1, $firstName1: $$wage1<br>");
		print("$lastName2, $firstName2: $$wage2<br>");
		print("$lastName3, $firstName3: $$wage3</p>");
		print("<p>TOTAL WAGES PAID: $$totalWages</p>");
		print("<p>AVERAGE WAGE:     $$avgWage</p>");
	?>
</body>
</html>
