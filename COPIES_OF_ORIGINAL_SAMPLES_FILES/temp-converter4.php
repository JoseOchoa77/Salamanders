<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	temp-converter4.php
		Purpose:Use a for loop to convert celsius temperatures to fahrenheit 
		using a startingtemperature, ending temperature and increment provided by the user.
		Input: startTemp, endTemp, increment
		Ouput: HTML document
-->
<html>
<head>
	<title>Temperature Conversions</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$startTemp = $_POST['startTemp'];
		$endTemp = $_POST['endTemp'];
		$increment 	 = $_POST['increment'];
	
		print("<h1>Temperature Conversions</h1>");

		print ("<table> ");
		print ("<tr><td><strong>Degrees Celsius</strong></td>
				<td><strong>Degrees Fahrenheit</strong></td></tr>");
		
		for ($celsius = $startTemp; $celsius <= $endTemp; $celsius = $celsius + $increment )
		{
			$fahrenheit = (9 / 5) * $celsius + 32;
			print("<tr><td class=\"center\">$celsius</td>
				<td class=\"center\">$fahrenheit</td></tr>");
		}
		
		print ("</table>");
	?>
</body>
</html>



