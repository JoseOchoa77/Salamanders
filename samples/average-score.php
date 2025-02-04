<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	average-score.php
		Purpose:Example of Reading data from a file
-->
<html>

<head>
	<title>AVERAGE SCORE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<?php
		$scoresFile =fopen("scores.txt", "r");

		$score1 = trim(fgets($scoresFile ));
		$score2 = trim(fgets($scoresFile ));
		$score3 = trim(fgets($scoresFile ));
		$score4 = trim(fgets($scoresFile ));
		$score5 = trim(fgets($scoresFile ));

		fclose($scoresFile );

		$avgScore = ($score1 + $score2 + $score3 + $score4 + $score5) / 5;

		print (" <h1>AVERAGE SCORE</h1>");
		print("<p>The average score is $avgScore. </p>");
		print (" <p><a href = \"averageScore.html\">Return to averageScore form</a></p> ");
	?>

</body>
</html>
