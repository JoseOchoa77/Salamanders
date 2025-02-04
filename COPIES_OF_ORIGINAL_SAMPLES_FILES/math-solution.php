<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	math-solution.php
		Purpose:PHP Practice
-->
<html>

<head>
	<title>Math Problem - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	print ("<h1> RESULTS </h1>");

	$sum = $_POST['sum'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];

	$correctAnswer = $num1 + $num2;


	if ($correctAnswer == $sum)
		print (" <p>That is correct!</p> ");
	else
		print (" <p>Sorry! The correct sum of $num1 and $num2 is $correctAnswer</p> ");

	print (" <p><a href = \"math-problem.php\">Try again?</a></p> ");

?>

</body>
</html>
