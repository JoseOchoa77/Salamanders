<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit4.php
	Purpose:  This program uses a variable in a loop to display the same message in 
			  five different heading levels (<h1> then <h2> then <h3> then <h4> then 
			  <h5>). Then it uses a SECOND loop to display the headings in
			  reverse order!
			  Can you fix it so that only heading levels 1, 3 and 5
			  are displayed in both loops?
			  Hint - you do not need to change the $size variable
			  and you do not need to change the start or ending values.

-->

<html>
<head>
	<title>King Painting</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>
<body>
	<?php

		for ($size = 1; $size <= 5; $size = $size + 1)
		{
			print ("<h$size>King Painting</h$size>");
		}


		for ($size = 5; $size >= 1; $size = $size - 1)
		{
			print ("<h$size>King Painting</h$size>");
		}

	?>
</body>
</html>
