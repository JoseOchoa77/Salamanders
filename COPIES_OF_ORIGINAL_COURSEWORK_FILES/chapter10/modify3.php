<!DOCTYPE html>
<!--Author:
	Date:
	File:	  modify3.php
	Purpose:  Add the necessary code in modify3.php so that the
			  program calculates and displays the first and last names
			  of employees who worked AT LEAST 40 AND EARNED LESS THAN
			  15.00 AN HOUR.
			  HINT: the correct answer is:
			  	Mike Smith
				John Anderson
-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		print ("<h1>EMPLOYEES WHO DESERVE A RAISE: </h1>");

		$timesheetFile = fopen("timesheets.txt", "r");
		$nextTimesheet = trim(fgets ($timesheetFile));

		while (!feof($timesheetFile) )
		{
			list ($firstName, $lastName, $hoursWorked, $hourlyRate) =
				explode (":", $nextTimesheet);

			print ("$firstName $lastName<br>");

			$nextTimesheet = trim(fgets($timesheetFile));
		}
		fclose ($timesheetFile);
	?>
</body>
</html>
