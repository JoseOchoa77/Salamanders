<!DOCTYPE html>
<!--Author:Jose Ochoa
	Date: 01/15/25
	File:	modify4.php
	Purpose:Chapter 12 Exercise

	modify4.php uses a print statement to display some demographic information about France.
	Modify this application to use an associative array named $franceInfo to store the four values
	("65.8", "Paris", "French", and "franc"). Use meaningful names for the array keys.

	Now modify the print statement so that it uses the $franceInfo array to obtain the four values.
	You do not to change modify4.html which just runs the program.
-->
<html>
<head>
	<title>Modify 4</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 4</h1>

	<?php

    $franceInfo['Population'] = 65.8;
    $franceInfo['Capital'] = "Paris";
    $franceInfo['Language'] = "French";
    $franceInfo['Currency'] = "Franc";
    
		print("<p>France has a population of ".$franceInfo['Population']." million people. The capital city is ".$franceInfo['Capital']." and the language is ".$franceInfo['Language'].". The currency is the ".$franceInfo['Currency'] = "Franc".".</p>");
	?>
</body>
</html>
