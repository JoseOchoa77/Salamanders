<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify2.php
	Purpose:Chapter 6 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify2.html) and a PHP program (modify2.php).

	modify2.html includes a form that consists only of a Submit button
	When the button is pressed, modify2.php runs, opens the file
	capital-info.txt which contains a list of four countries and capital
	cities. The program reads and displays the country and capital city
	from the first line.

	Modify modify2.php so that it reads and displays all four countries and
	capital cities in the capital-info.txt file.

-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$capitalFile = fopen("capital-info.txt","r");	// open the file for read operations
		$countryRecord1 = trim(fgets($capitalFile));			// read a line from the file
		fclose($capitalFile);

		list ($country1, $capital1) = explode(":", $countryRecord1);

		print("<p>$capital1 is the capital city of $country1.</p>");

	?>

</body>
</html>
