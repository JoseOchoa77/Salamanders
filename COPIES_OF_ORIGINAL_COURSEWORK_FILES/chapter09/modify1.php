<!DOCTYPE html>
<!--Author:
	Date:
	File:	modify1.php
	Purpose:Chapter 9 Exercise

				modify1.html does not need to be changed. Change modify1.php
				so that it will find the oldest age in ages.txt instead of
				the average age. Hints: You no longer need the  $total or
				$averageAge variables. Refer to Chapter 9 to see how
				to use a loop to find the highest number in a series..
-->
<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<h1>Modify1</h1>

	<?php

		$total = 0;
		$ageFile = fopen("ages.txt", "r");

		for ($count = 1; $count <= 10; $count = $count + 1)
		{
			$nextAge = trim(fgets($ageFile));
			$total = $total + $nextAge;
		}
		fclose($ageFile);
		$averageAge = $total/10;

		print("<p>The average age in the file is $averageAge.</p>");
	?>

</body>
</html>
