<!DOCTYPE html>
<!--
	Author:
	Date:
	File:	  scenes.php
	Purpose:  Chapter 12 Exercise
	
-->

<html>
<head>
	<title>SCENES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$direction = $_POST['direction'];
		
		$scenes ['north'] = "There is a great lake to the north. Oh No! You fall in and are drowned!";
		$scenes ['south'] = "You walk further and further south. The desert is very hot and there is no food. This is not good.";
		$scenes ['east'] = "After a while you reach a port and take a ship to a far-off land.";
		$scenes ['west'] = "You head for a city that you see in the distance. When you arrive, you become a successful programmer.";
		$scenes ['nowhere'] = "You sit around for a while. There really isn't much happening here.. 	<a href = \"scenes.html\">Bored yet?</a>.";		

		print ("<h1>You head $direction</h1>");
		print ("<p>THIS SHOULD DISPLAY THE CORRECT SCENE</p>");
	?>
</body>
</html>
