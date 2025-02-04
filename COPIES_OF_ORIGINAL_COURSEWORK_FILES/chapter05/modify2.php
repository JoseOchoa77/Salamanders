<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify2.php
	Purpose:Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify2.html) and a PHP progam (modify2.php).

	modify2.html should include a form that prompts the user for their age,
	and also for the age that they plan to retire., then submits these
	to modify2.php for processing. modify2.html already contains most
	of this code but needs code to prompt for the age the user plans to retire.

	modify2.php should: receive the age and ageToRetire from the $_POST array;;
	calculate the number of years until they retire
	based on the user's age and the age that the user plans to retire;
	display their age and years to retire.

	modify2.php already contains the code to calculate and display the
	numbers of years to retirement but the calculation assumes the user
	will retire at 65. Modify this so the calculation is based on the
	age the user plans to retire instead.

-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify2</h1>

	<?php
		$age = $_POST['age'];
		$yearsToRetire = 65 - $age;

		print("<p>Your age is $age. You have $yearsToRetire years until retirement.</p>");
	?>

</body>
</html>
