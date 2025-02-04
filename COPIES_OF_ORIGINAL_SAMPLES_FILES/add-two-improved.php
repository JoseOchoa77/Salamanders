<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	April 15, 2021
		File:	add-two-improved.php
		Purpose:PHP Practice
-->
<html>

<head>
	<title>Add Two Numbers - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php

	if ($_SERVER["REQUEST_METHOD"] == "POST")   // if form input was received, PROCESS the form input
	{
		$number1 = $_POST['number1'];
		$number2 = $_POST['number2'];
		$result = $number1 + $number2;
		print ("<h1> RESULTS </h1>");
		print (" <p>$number1 + $number2 = $result.</p> ");
		
		print (" <p><a href = \"add-two-improved.php\">Return to the Input Form</a></p> ");
	}
	
	else // if form input has NOT been received, DISPLAY the form
	{
?>
	<h1>ADD TWO NUMBERS</h1>

     <form action = "add-two-improved.php" method = "post" > 
		<label>1st number:<input type = "text" size = "5" name = "number1"></label>
		<label>2nd number:<input type = "text" size = "5" name = "number2"></label>
		<input class = "submit" type = "submit" value = "Tell me the sum" name = "submit">
	</form>
<?php
	}
?>
</body>
</html>
