<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit1.php
	Purpose:  What's wrong here? The loop is supposed to
			  display the message 7 not 6 times?
-->

<html>
<head>
	<title>Relationships</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		print ("<h1>7 Steps to a successful relationship..</h1>");

		for ($count = 1; $count < 7; $count = $count + 1)
		{
			print("Step #$count: Always be honest and true<br>");
		}
	?>
</body>
</html>
