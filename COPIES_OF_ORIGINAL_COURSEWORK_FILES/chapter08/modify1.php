<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 8 Exercise

		modify1.html does not need to be changed. Change modify1.php
		so that it will generate an error message if the age is
		less than 0 or greater than 65, otherwise the program should
		calculate and display the years to retirement as listed below.
		Use this error message:
		"<p>ERROR: You entered $age - that is out of range</p>"
-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify1</h1>

	<?php
		$age = $_POST['age'];

		$yearsToRetire = 65 - $age;

		print("<p>Your age is $age. You have $yearsToRetire years until retirement.</p>");
	?>

</body>
</html>
