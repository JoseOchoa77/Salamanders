<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	calc-windchill.php
		Purpose:Calculates the windchill of a temperature and windspeed submitted
			by the user using functions obtained from temperatureFunctions.php
		Input: celsius, windspeed
		Output: celsius, windspeed, windchill
-->

<html>
<head>
	<title>WIND CHILL CALCULATOR</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>WIND CHILL CALCULATOR</h1>

<?php

	include ("inc-temp-functions.php");

	$celsius = $_POST['celsius'];
	$windspeed = $_POST['windspeed'];

	$fahrenheit = toFahrenheit($celsius);

	$windchillF = getWindchill ($fahrenheit, $windspeed );

	$windchillC = toCelsius($windchillF);

	print ("Temperature (Celsius): $celsius<br>");
	print ("WindSpeed (miles per hour): $windspeed<br>");
	print ("Windchill (Celsius): ".number_format($windchillC, 2)."<br>");

?>

</body>
</html>

