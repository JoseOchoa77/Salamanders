<!DOCTYPE html>
<!--	Author:
		Date:
		File:	trip-log.php
		Purpose: Chapter 6 Exercise

-->

<html>
<head>
	<title>TRIP LOG</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php
		$tripDate = $_POST['tripDate'];
		$miles = $_POST['miles'];		
		$breakfast = $_POST['breakfast'];
		$lunch = $_POST['lunch'];
		$dinner = $_POST['dinner'];		
		$hotel = $_POST['hotel'];
		
		// add the code to append this information to the trip-log.txt file

		
		
		print ("<h1>TRIP LOG</h1>");
		print ("<p>Your trip on $tripDate has been added to the Trip Log</p>");	
		
		
	?>

</body>
</html>
