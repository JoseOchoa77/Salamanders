 <!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	January, 2013
		File:	arrays6.php
		Purpose:Reading data from a file into two arrays
-->
<html>
<head>
	<title>SCORES REPORT</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$scoreFile = fopen("scores5.txt", "r");
		$i=0;
		$j=0;
		$femaleScores = array();
		$maleScores = array();
		$nextRecord = trim(fgets($scoreFile));
		while (!feof($scoreFile))
		{ 
			list($gender, $score) = explode(":", $nextRecord);
			if ($gender =="f")
			{
				 $femaleScores [$i] = $score;
				$i = $i + 1;
			}
			else
			{
				 $maleScores [$j] = $score;
				$j = $j + 1;
			}

			$nextRecord = trim(fgets($scoreFile));
		}
		fclose($scoreFile);

		print("<p>There are ". sizeof($femaleScores)." female scores in the file.</p>");
		print("<p>There are ". sizeof($maleScores)." male scores in the file.</p>");


	?>
</body>
</html>

