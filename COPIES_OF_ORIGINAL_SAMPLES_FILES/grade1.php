<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	grade1.php
		Purpose:Demonstrates the use of a simple if..else structure to
				to process a set of grades
		Input: 	exam1, exam2, exam3
		Output: HTML document that displays exam1, exam2, exam3 and whether or not
				the average score is a passing or failing grade
-->

<html>
<head>
	<title>EXAM GRADE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$exam1 = $_POST['exam1'];
		$exam2 = $_POST['exam2'];
		$exam3 = $_POST['exam3'];
		
		print("<h1>EXAM GRADE</h1>");
		print("Exam 1 score: $exam1<br>");
		print("Exam 2 score: $exam2<br>");
		print("Exam 3 score: $exam3<br>");
		print("<p><strong>OVERALL GRADE: ");

		$averageScore = ($exam1 + $exam2 + $exam3) / 3;

		if ($averageScore >= 60)
			print("Pass</strong></p>");
		else
			print("Fail</strong></p>");

		print ("<p><a href=\"grade1.html\">Return to form</a></p>");

	?>
</body>
</html>

