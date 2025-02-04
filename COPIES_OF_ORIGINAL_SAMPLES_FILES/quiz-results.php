<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	quiz-results.php
		Purpose:This PHP program receives the user's answers to three questions
				along with the correct answers. The program calculates the number
				of correct answers and displays the score.
				Note the use of the ++ operator - this is called the
				increment operator and can be used to add 1 to the value stored
				in a numeric variable. For example $score++; is equivalent to
				$score = $score + 1;
				Similarly -- is the decrement operator, for example $score--; will
				subtract 1 from the value stored in the variable.
-->

<html>

<head>
	<title>EXAM GRADES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$answer1  = $_POST['answer1'];
		$answer2  = $_POST['answer2'];
		$answer3  = $_POST['answer3'];
		$correct1 = $_POST['correct1'];
		$correct2 = $_POST['correct2'];
		$correct3 = $_POST['correct3'];
		
		$score = 0;

		if ($answer1 == $correct1)
			$score++;

		if ($answer2 == $correct2)
			$score++;

		if ($answer3 == $correct3)
			$score++;


		print("<h1>QUIZ RESULTS: You scored $score out of 3</h1>");

	?>
</body>
</html>