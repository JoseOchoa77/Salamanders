<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	compare-movies.php
		Purpose:Example of PHP selection strucures using if..elseif..else to
				handle three possible actions. Note the use of {} braces under
				the if and elseif sections since each of these two blocks
				contains more than one statement. The final esel block contains
				only a single statement so the braces are not needed.
-->

<html>

<head>
	<title>Movie Comparison - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	$SWrating = $_POST['SWrating'];
	$LRrating = $_POST['LRrating'];	
	
	print (" <h1>RESULTS</h1>");

	print (" <p>You gave the Star Wars movies a rating of ".$SWrating.".</p> ");

	print (" <p>You gave the Lord of the Rings movies a rating of ".$LRrating.".</p> ");

	if ($SWrating == $LRrating)
	{
			print (" <p>You rated these equally. I thought Lord of the Rings was better, ");
			print (" of course I'm just a computer.. ;)</p> ");
	}

	elseif ($SWrating > $LRrating)
	{
			print ("<p>Really? I thought Lord of the Rings was much better, ");
			print (" of course I'm just a computer.. ;)</p> ");
	}
	else
			print (" <p>I agree - Lord of the Rings was definitely better!</p> ");

	print (" <p><a href = \"compare-movies.html\">Return to the Movie Ratings Form</a></p> ");
?>

</body>
</html>