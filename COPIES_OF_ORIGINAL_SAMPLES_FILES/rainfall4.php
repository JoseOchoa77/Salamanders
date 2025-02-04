<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	rainfall4.php
		Purpose:Example of using a for loop to display a series of rainfall values
		Input: File containing a year, followed by 12 monthly rainfall amounts
		Output: HTML document containing year, the name of each month,
				and the monthly rainfall values
-->
<html>
<head>
	<title>RAINFALL</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$rainDataFile =fopen("rainfall2007.txt","r");

		$year = trim(fgets($rainDataFile));
		print ("<h1>RAINFALL REPORT: $year</h1>");

		print("<table>");
		print ("<tr><td>MONTH</td><td>RAINFALL</td></tr>");

		for ($count= 1; $count <= 12; $count = $count + 1)
		{
			print ("<tr>");
			$nextRainfallAmount = trim(fgets($rainDataFile));
			if ($count == 1)
				print("<td>January</td>");
			elseif ($count == 2)
				print("<td>February</td>");
			elseif ($count == 3)
				print("<td>March</td>");
			elseif ($count == 4)
				print("<td>April</td>");
			elseif ($count == 5)
				print("<td>May</td>");
			elseif ($count == 6)
				print("<td>June</td>");
			elseif ($count == 7)
				print("<td>July</td>");
			elseif ($count == 8)
				print("<td>August</td>");
			elseif ($count == 9)
				print("<td>September</td>");
			elseif ($count == 10)
				print("<td>October</td>");
			elseif ($count == 11)
				print("<td>November</td>");
			else
				print("<td>December</td>");

			print("<td>$nextRainfallAmount</td>");
			print("</tr>");
		}
		fclose($rainDataFile);
		print("</table>");
	?>
</body>
</html>
