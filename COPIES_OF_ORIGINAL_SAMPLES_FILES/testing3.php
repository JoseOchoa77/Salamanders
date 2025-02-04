<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	testing3.php
		Purpose:Introduce a counting loop (for loop) that is controlled by a value
		received from a form.
		Input: numTimes (received from form in testing3.hmtl)
		Ouput: HTML document - displays test message using the value of numTimes that was
		received from the form.
-->

<html>
<head>
	<title>Testing...</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$numTimes = $_POST['numTimes'];
	
		print("<h1>This is a test ($numTimes repetitions)</h1>");

		for ($counter = 1; $counter <= $numTimes; $counter = $counter + 1)
		{
			print("Testing ... $counter...<br>");
		}

		print("<h1>End of test</h1>");
	?>
</body>
</html>



