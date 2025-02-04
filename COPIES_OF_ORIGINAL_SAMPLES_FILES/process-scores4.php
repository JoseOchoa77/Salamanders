<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	process-scores4.php
		Purpose:Process a file containing a list of scores, each ona separate line
		Input: fileName received from process-scores4.html
		Output: A list of the scores stored in the file

-->
<html>
<head>
	<title>STUDENT SCORES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

	<h1> STUDENT SCORES </h1>

<?php
	include ("inc-numeric-file-functions.php");

	$fileName = $_POST['fileName'];

	printData($fileName);

  //refactoring code
	//$avgScore = getAverage($fileName);
	//$numScores = getCount($fileName);
	print ("Number of Scores: ".getCount($fileName)."<br>");
	print ("Average Score: ". getAverage($fileName)."<br>");
  
?>

</body>
</html>
