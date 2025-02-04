<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	temp-converter2.php
		Purpose:Use a for loop to convert celsius temperatures to fahrenheit 
		(every 10th temperature between 0 and 100)and display the results
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
		print("<h1>Temperature Conversions</h1>");

		for ($celsius = 0; $celsius <= 100; $celsius = $celsius + 10 )
		{
			$fahrenheit = (9 / 5) * $celsius + 32;
			print("$celsius degrees C. = $fahrenheit degree F.<br>");
		}
	?>
</body>
</html>



