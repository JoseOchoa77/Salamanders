<!--	Author:
		Date:
		File:	city-weather.php
-->
<html>
<head>
	<title>XSS Reflection</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body style = "width:300; border-style:groove; padding:20px; border-color:red">
	<h1>XSS Reflection</h1>
<?php
    $city = $_POST['city'];
	$weather = $_POST['weather'];

	$badFile = fopen("weather.txt", "a");
	fputs($badFile, "$city:$weather\n");
	fclose($badFile);
	
	print("<p>Thank you, the weather has been recorded as follows: </p>");
	print("<p>$city:$weather.</p>");
	
?>
<p><a href="city-weather.html">Return to XSS Demo</a></p>
	
</body>
</html>

