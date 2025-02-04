<!DOCTYPE html>
<!--	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	message.php
	Purpose: Write to a File Example
-->

<html>
<head>
	<title> Write to a File Example </title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>

<?php
	$messageFile =fopen("message.txt", "w");

	fputs($messageFile, "This is a test. This is only a test\n");

	$test = "Testing 1, 2, 3 \n";

	fputs($messageFile, $test);

	fclose($messageFile);

	print("<p>A message has really been written to the message.txt file.</p>");
?>

</body>
</html>

