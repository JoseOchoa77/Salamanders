<!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	August 15, 2007
		File:	arrays4.php
		Purpose:Demonstrate the use of a FOR loop to process an array
-->
<html>
<head>
	<title>SCORES REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$scoreFile =fopen("scores1.txt", "r");
		$i = 0;
		$score = trim(fgets($scoreFile));
	
		while (!feof($scoreFile))
		{
			$scores [$i] = $score;
			$score = trim(fgets($scoreFile));
			$i = $i + 1;
		}
		fclose($scoreFile);

		$sum = 0;
		$numPassingScores = 0;
	
		print("<h1>SCORES REPORT</h1>");
		print("<table border = \"1\">");
		for($i = 0; $i < sizeof($scores); $i = $i + 1)
		{
			$scoreNum = $i + 1;
			print ("<tr><td>SCORE $scoreNum</td><td>$scores[$i]</td></tr>");
			
			$sum = $sum + $scores[$i];

			if ($scores[$i] >= 60)
				$numPassingScores = $numPassingScores + 1;			
		}
		print("</table>");
		
		$numFailingScores = sizeof($scores) - $numPassingScores;

		$average = $sum / sizeof($scores);

		print ("<p>AVERAGE SCORE: $average <br>");
		print ("NUMBER OF PASSING SCORES: $numPassingScores <br>");
		print ("NUMBER OF FAILING SCORES: $numFailingScores </p>");
	?>
</body>
</html>

