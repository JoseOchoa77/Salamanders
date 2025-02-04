<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 6 Exercise

		REQUIREMENT: Write a Web-based application consisting of a Web form
		(modify1.html) and a PHP program (modify1.php).

		modify1.html includes a form that prompts the user for a country and
		the capital city of that country. When this is submitted, modify1.php
		receives the two inputs and writes this to a file named capitals.txt
		Run the program a few times, each time entering a different country
		and capital. After each each submission, open capitals.txt to see that
		the file has been changed. Note the previous content of the file is
		lost each time new input is submitted. That's because the file is opened
		for write operations.

		Now modify modify1.php so that the  file is opened for append
		operations instead of write operations. Run the program a few times,
		each time entering a different country and capital. After each each
		submission, open capitals.txt to see that the file has been changed.
		Note that now each new submission is added to the existing file.



-->

<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify1</h1>

	<?php
		$country = $_POST['country'];
		$capitalCity = $_POST['capitalCity'];

		$capitalFile = fopen("capitals.txt","w");	// open the file for write operations

		fputs($capitalFile, "$country:$capitalCity\n");// write the input to the file
		fclose($capitalFile);

		print("<p>The following information has been stored in the file capitals.txt:</p>");
		print("<p>$country:$capitalCity</p>");
	?>

</body>
</html>
