<!DOCTYPE html>
<!--Author:
	Date:
	File:	air-fare.php
	Purpose:Chapter 13 Exercise


-->


<html>
<head>
	<title>AIR FARE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>AIR FARE CALCULATOR</h1>

	<?php

		$destination = $_POST['destination'];


		print("<p>Destination: $destination<br />");
		print("The air fare is $".number_format($airFare, 2)." on $airline.</p>");


	?>

</body>
</html>
