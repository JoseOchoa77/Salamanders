<!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	August 15, 2007
		File:	arrays1.php
		Purpose:PHP Practice
-->
<html>
<head>
	<title>Scores Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Scores report </h1>

	<?php
		$scores[0]   = $_POST['exam1'];
		$scores[1]   = $_POST['exam2'];
		$scores[2]   = $_POST['exam3'];
		$scores[3]   = $_POST['essay'];
		$scores[4]   = $_POST['project'];

		$averageExamScore = ($scores[0] + $scores[1] +$scores[2]) / 3;

		If ($averageExamScore >= 90)
		{
			if ($scores[4] > 95)
				$scores[4] = 100;
			else
				$scores[4] = $scores[4] + 5 ;
		}

		$totalScore = $scores[0] + $scores[1] + $scores[2] +
					$scores[3] + $scores[4];

		print ("Exam 1: $scores[0]<br>");
		print ("Exam 2: $scores[1]<br>");
		print ("Exam 3: $scores[2]<br>");
		print ("Essay  : $scores[3]<br>");
		print ("Project: $scores[4]<br>");

		print ("<p>Your total score is: <strong>$totalScore </strong> out
			of a possible 500 points.</p>");
		print ("<p>Your average for the three exams is: <strong>".
			 number_format($averageExamScore, 2)."</strong>. If this average is
			 90 or above, 5 points has been added to your project score
			(up to a maximum project score of 100 points).</p>");
	?>
</body>
</html>

