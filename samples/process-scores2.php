<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-scores2.php
		Purpose:Process a file containing a list of scores, each on a separate line
		Input: fileName received from process-scores2.html
		Output: A list of the scores in the file that are in the range 0 to 100
-->
<html>
<head>
	<title>STUDENT SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> STUDENT SCORES </h1>

	<?php
		$fileName = $_POST['fileName'];		
		
		$scoreFile =fopen("$fileName", "r");	// open the scores file

		$score = trim(fgets($scoreFile));			// read the first line

		while ( !feof($scoreFile) )				// test for EOF
		{
			if ($score >= 0 and $score <= 100)
				print ("$score<br>");		// print the score
			$score = trim(fgets($scoreFile));		// read the next line
		}

		fclose($scoreFile);				// close the file

		print("<p>END OF FILE REACHED</p>");
	?>

</body>
</html>
