<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	testing2.php
		Purpose:Introduce a counting loop (for loop) that uses the
		value of the counting variable in the loop statements
		Input: none
		Ouput: HTML document - displays Testing message, including the count
-->


<html>
<head>
	<title>Testing...</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		print("<h1>This is a test</h1>");

		for ($counter = 1; $counter <= 3; $counter = $counter + 1)
		{
			print("Testing ... $counter...<br>");
		}

		print("<h1>End of test</h1>");
	?>
</body>
</html>




