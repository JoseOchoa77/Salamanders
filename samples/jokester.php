<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	jokester.php
		Purpose:This example demonstrates the user of an if..elseif..elseif structure
		to display a joke depending on the input received from a drop down list.
-->
<html>
<head>
	<title> Jokester</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Welcome to the Jokester!</h1>
	<?php
		$joke = $_POST['joke'];	 

		if ($joke == "1. Parachute joke")
		{
 			print("<p>Parachute for Sale</p>");
 			print("<p>Never opened ...</p>");
 			print("<p>... Only used ONCE...</p>");
 			print("<p>... ...cash only please...</p>");
		}
		elseif ($joke == "2. Buddhist joke")
		{
		 	print("<p>QUESTION:</p>");
		 	print("<p>What did the Buddhist say to the hot dog vendor?</p>");
		 	print("<p>ANSWER:</p>");
		 	print("<p>Make me one with everything.</p>");
		}
		elseif ($joke == "3. Fish Joke")
		{
		 	print("<p>QUESTION:</p>");
		 	print("<p>What do you call a fish with no eyes?</p>");
		 	print("<p>ANSWER:</p>");
		 	print("<p>A fsh.</p>");
		}

		print (" <p><a href = \"jokester.html\">Return to the Jokester</a></p>");
	?>

</body>
</html>
