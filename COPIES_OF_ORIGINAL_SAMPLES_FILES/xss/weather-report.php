<!--	Author:
		Date:
		File:	weather-report.php
-->
<html>
<head>
	<title>Stored XSS Demo</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body style = "width:300; border-style:groove; padding:20px; border-color:red">
	<h1>Stored XSS Demo</h1>
<?php
    if (file_exists("weather.txt")) {
        $badFile = fopen("weather.txt", "r");
	
        $rec = trim(fgets($badFile));
        while(!feof($badFile)) {
            list($city, $weather) = explode(":", $rec);
            print ("<p>The weather for $city is $weather.</p>");
            $rec = trim(fgets($badFile));
        }
    fclose($badFile);
    print("<p><a href=\"city-weather.html\">Return to XSS Demo</a></p>");
    }
    else {
        print ("<p>No cities have been reported yet.</p>
        <p><a href=\"city-weather.html\">Submit a city now.</a></p>");
    }
      

?>
</body>
</html>

