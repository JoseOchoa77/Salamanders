<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify3.php
	Purpose:Chapter 8 Exercise

	Modify this so that if the user selects the right city, the
	program displays the message "<p>That is correct!</p>"
	Otherwise the the program displays a message that includes the
	city selected by the user and the country where the city is located.
	The message will be only one of the following:
	"<p>You entered London, which is the capital city of England.</p>"
	"<p>You entered Madrid, which is the capital city of Spain.</p>"
	"<p>You entered Istanbul, which is the capital city of Turkey.</p>"
	"<p>You entered Rome, which is the capital city of Italy.</p>"
	This will require multiple selection structures. For help take
	a look at art-gallery.php and jokester.php in the samples folder

-->

<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify3</h1>

	<?php
		$capital = $_POST['capital'];


		print("<p>The capital of Egypt is Cairo</p>");
	?>

</body>
</html>
