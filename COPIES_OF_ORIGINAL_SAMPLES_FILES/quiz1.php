<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	quiz1.php
		Purpose:Demonstrates the use of a simple if..else structure to
				to process a quiz
		Input: 	userAnswer
		Output: HTML document that displays either a correct message or
		an incorrect message and correctAnswer
-->

<html>
<head>
	<title>QUIZ</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$userAnswer = $_POST['userAnswer'];	
		
		print("<h1>QUIZ</h1>");

		$correctAnswer = "Boolean";
		if ($userAnswer == $correctAnswer)
			print("<p>That is correct!</p>");
		else
		{
			print("<p>That is incorrect!</p>");
			print("<p>The correct answer is $correctAnswer</p>");
		}
	?>
</body>
</html>
