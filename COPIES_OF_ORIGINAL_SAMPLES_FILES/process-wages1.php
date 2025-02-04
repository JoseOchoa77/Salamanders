<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-wages1.php
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
		$fileName = $_POST['fileName'];	// get filename submitted by the user

		print ("<table>");
		print ("<tr><td>NAME</td><td>HOURS</td><td>HRLY WAGE</td</tr>");

		$timesheetFile =fopen("$fileName","r");	// open the scores file
		$empRecord = trim(fgets($timesheetFile));		// read the first line

		while ( !feof($timesheetFile) )			// test for EOF
		{

			list($firstName, $lastName, $hours, $payRate) = explode (":", $empRecord);
			print ("<tr><td> $firstName $lastName</td>");
			print ("<td> $hours</td>");
			print ("<td> $payRate</td></tr>");

			$empRecord = trim(fgets($timesheetFile));	// read the next line
		}

		fclose($timesheetFile);					// close the file

		print("</table>");
		print("<p>END OF FILE REACHED</p>");
	?>
	<p><a href = "process-wages1.html">Process another file</a></p>

</body>
</html>
