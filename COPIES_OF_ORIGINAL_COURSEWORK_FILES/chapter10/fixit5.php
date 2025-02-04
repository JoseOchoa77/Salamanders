<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  What's wrong here?
			  This program is supposed to display the last name and
			  hours worked of all employees in the timesheets.txt file
			  who worked more than 0 hours. There are 8 people
			  in the file who worked more than 0 hours but the
			  program does not display any of them.
			  What's wrong here? HINT: for some reason the loop
			  test is false the very first time so the loop never
			  executes..
-->

<html>
<head>
	<title>FixIt5</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		print ("<h1>TIMESHEET REPORT</h1>");

		$timesheetFile = fopen("timesheets.txt", "r");
		$nextTimesheet = trim(fgets($timesheetFile));

		while (feof($timesheetFile) )
		{
			list ($firstName, $lastName, $hoursWorked, $hourlyRate) =
				explode (":", $nextTimesheet);
			if ($hoursWorked > 0)
				print ("$lastName worked $hoursWorked  hours <br>");

			$nextTimesheet = trim(fgets($timesheetFile));
		}
		fclose ($timesheetFile);
		print ("<h1>END OF REPORT</h1>");
	?>
</body>
</html>
