<!DOCTYPE html>
<!--	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	process-wages2.php
	Purpose: Read a file and display the contents
-->
<html>
<head>
	<title>WEEKLY WAGE REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> WEEKLY WAGE REPORT </h1>

	<?php
		$fileName = $_POST['fileName'];	
		
		$timesheetFile =fopen("$fileName", "r");	// open the scores file

		$empRecord = trim(fgets($timesheetFile));		// read the first line

		while ( !feof($timesheetFile) )			// test for EOF
		{

			list($firstName, $lastName, $hours, $payRate) = explode (":", $empRecord);
			$weeklyWage = $hours * $payRate;

			print ("PAY TO $firstName $lastName SUM OF $".
							number_format($weeklyWage, 2)."<br>");

			$empRecord = trim(fgets($timesheetFile));	// read the next line
		}
		fclose($timesheetFile);					// close the file

		print("<p>END OF FILE REACHED</p>");
	?>
	<p><a href = "process-wages2.html">Process another file</a></p>

</body>
</html>
