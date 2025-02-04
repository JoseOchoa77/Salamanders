 <!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	January, 2013
		File:	arrays5.php
		Purpose:Reading data from a file into two arrays
-->
<html>
<head>
	<title>SCORES REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$scoreFile = fopen("scores1.txt", "r");
		$i=0;
		$j=0;
		$passingScores = array();
		$failingScores = array();
		$nextScore = trim(fgets($scoreFile));
		while (!feof($scoreFile))
		{ 
			if ($nextScore >= 60)
			 {
				$passingScores [$i] = $nextScore;
				$i = $i + 1;
			}
			else
			 {
				$failingScores [$j] = $nextScore;
				$j = $j + 1;
			}

			$nextScore = trim(fgets($scoreFile));
		}

		fclose($scoreFile);

		print("<p>There are ". sizeof($passingScores)." passing scores in the file.</p>");
		print("<p>There are ". sizeof($failingScores)." failing scores in the file.</p>");

	?>
</body>
</html>

