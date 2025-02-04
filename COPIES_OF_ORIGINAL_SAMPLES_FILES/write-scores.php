<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	write-scores.php
		Purpose:Example of Writing data to a file
-->
<html>
<head>
	<title>Save Your Scores</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$score1 = $_POST['score1'];
		$score2 = $_POST['score2'];
		$score3 = $_POST['score3'];
		$score4 = $_POST['score4'];
		$score5 = $_POST['score5'];	
		
		$scoresFile =fopen("my-scores.txt","w");

		fputs($scoresFile, "$score1\n");
		fputs($scoresFile, "$score2\n");
		fputs($scoresFile, "$score3\n");
		fputs($scoresFile, "$score4\n");
		fputs($scoresFile, "$score5\n");

		fclose($scoresFile );

		print (" <h1>The following scores have been stored in my-scores.txt:</h1>");
		print("<p>$score1<br>$score2<br>$score3<br>$score4<br>$score5</p>");

		print (" <p><a href = \"write-scores.html\">Return to Write Scores form</a></p> ");
	?>
</body>
</html>
