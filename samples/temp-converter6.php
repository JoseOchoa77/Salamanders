<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	temp-converter6.php
		Purpose:Use a for loop to convert celsius temperatures to fahrenheit
		(every 10th temperature between 0 and 100)and display the results in a table.
		This example uses functions from the inc-temp-functions.php file.
		Input: none
		Ouput: HTML document
-->
<html>
<head>
	<title>Temperature Conversions</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		include ("inc-temp-functions.php");

		print("<h1>Temperature Conversions</h1>");
		print("<p>NOTE: These conversions use the formula:<br>".strFahrenheitFormula().".</p>");

		print ("<table> ");
		print ("<tr><td><strong>Degrees Celsius</strong></td>
				<td><strong>Degrees Fahrenheit</strong></td></tr>");

		for ($celsius = 0; $celsius <= 100; $celsius = $celsius + 10 )
		{
			$fahrenheit = toFahrenheit($celsius);
			print("<tr><td class = \"center\">$celsius</td>
				<td class = \"center\">$fahrenheit</td></tr>");
		}
		print ("</table>");
	?>
</body>
</html>



