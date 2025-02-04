<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	compare-pets.html
		Purpose:Example of PHP selection strucures using if..elseif..else to
				handle three possible actions. Note the use of {} braces under
				the if and elseif sections since each of these two blocks
				contains more than one statement. The final esel block contains
				only a single statement so the braces are not needed.
-->

<html>
<head>
	<title>Favorite Pets</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Favorite Pets</h1>

	<?php
	$dogRating = $_POST['dogRating'];
	$catRating = $_POST['catRating'];

	print (" <h1>RESULTS</h1>");

	print (" <p>You gave dogs a rating of $dogRating</p> ");

	print (" <p>You gave cats a rating of $catRating</p> ");

	if ($dogRating == $catRating)
	{
			print (" <p>You rated these equally. I prefer dogs, ");
			print (" they're so much friendlier! But then I'm allergic to cats! </p> ");
	}

	elseif ($dogRating > $catRating)
			print (" <p>I agree - dogs like to play!</p> ");
	else
	{
			print ("<p>Really? I prefer dogs, ");
			print (" but we all have our preferences.. </p> ");
	}

	print (" <p><a href = \"compare-pets.html\">Return to the Pet Comparison Form</a></p> ");
?>

</body>
</html>
