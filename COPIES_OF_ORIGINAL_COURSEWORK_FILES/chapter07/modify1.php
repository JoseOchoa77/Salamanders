<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 7 Exercise

		modify1.html provides a form asking the user to enter their age.
		modify1.php calculates and displays the number of years until
		retirement, even if the user enters 65 or above!
		Change modify1.php so that the program either calculates and displays
		the years until retirement, or else calculates and displays the number of
		years the person has been retired. To do this, use an IF..ELSE structure
		to test the age. Assume that someone less than 65
		is not retired, someone 65 or older is retired


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
