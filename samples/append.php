<!DOCTYPE html>
<!--	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	message.php
	Purpose: Append to a File Example
-->

<html>
<head>
	<title>Append to a File Example </title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  >
</head>
<body>

<?php
	$messageFile =fopen("message.txt", "a");

	fputs($messageFile, "This is being appended to message.txt\n");

	fclose($messageFile);

	print("<p>A message has been added to the message.txt file.</p>");
?>
</body>
</html>
