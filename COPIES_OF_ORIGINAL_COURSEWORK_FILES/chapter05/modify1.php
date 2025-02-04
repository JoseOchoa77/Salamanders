<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 5 Exercise

	REQUIREMENT: Write a Web-based application consisting of a Web form
	(modify1.html) and a PHP program (modify1.php).

	modify1.html should include a form that prompts the user for their age
	and submits this to modify1.php for processing. modify1.html has been
	provided and can be used as-is.

	modify1.php should: receive the age from the $_POST array;
	calculate the number of years until they retire
	(assume they retire at 65); calculate the number of years they have
	worked so far (assume they have worked since 18 years old);
	display their age, years to retire, and years they have worked so far.

	modify1.php already contains the code to calculate and display the
	numbers of years to retirement. You must add the code to calculate
	and display the years worked so far.

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
