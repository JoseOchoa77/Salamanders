<!--	Author:
		Date:
		File:	test-filter-var.php
-->
<html>
<head>
	<title>Test sanitizing</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body style = "width:300; border-style:groove; padding:20px; border-color:red">
	<h1>Test filter_var() with FILTER_SANITIZE_SPECIAL_CHARS</h1>
<?php
    $city = $_POST['city'];
	$weather = $_POST['weather'];
	$other = $_POST['other'];

//	$badFile = fopen("weather.txt", "a");
//	fputs($badFile, "$city:$weather\n");
//  fclose($badFile);
	
	print("<p>Thank you, the weather has been recorded as follows: </p>");
	print("<p>$city,$weather, $other.</p>");
/*
	foreach ($_POST as $name => $value) {
        $_POST["$name"] = filter_var($value, FILTER_SANITIZE_STRING);
    }
*/
    
    $city = filter_var($_POST['city'], FILTER_SANITIZE_SPECIAL_CHARS);
    $weather = filter_var($_POST['weather'], FILTER_SANITIZE_SPECIAL_CHARS);
	$other = filter_var($_POST['other'], FILTER_SANITIZE_SPECIAL_CHARS);
	
	print("<p>Thank you, the weather has been recorded as follows: </p>");
	print("<p>$city,$weather, $other.</p>");
	
?>
<p><a href="test-filter-var.html">Return to form</a></p>
	
</body>
</html>

