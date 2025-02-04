<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-wages3.php
		Purpose: Read a file and find Mary King's records

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
		$searchFName = $_POST['searchFName'];	
		$searchLName = $_POST['searchLName'];	
						
		$timesheetFile =fopen("$fileName","r");	// open the scores file

		$empRecord = trim(fgets($timesheetFile));		// read the first line

		while ( !feof($timesheetFile) )			// test for EOF
		{

			list($firstName, $lastName, $hours, $payRate) = 
										explode (":", $empRecord);

			if ($firstName == $searchFName and 
									$lastName == $searchLName)
			{

				print ("$firstName $lastName worked $hours hours<br>");
			}

			$empRecord = trim(fgets($timesheetFile));	// read the next line
		}
		fclose($timesheetFile);					// close the file

		print("<p>END OF FILE REACHED</p>");
	?>
	<p><a href = "process-wages3.html">Process another file</a></p>
</body>
</html>
