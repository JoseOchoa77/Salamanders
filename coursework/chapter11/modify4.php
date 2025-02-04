<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/10/25
	File:	modify4.php
	Purpose:Chapter 11 Exercise

	modify4.php calculates the average age of a class of 10 students. It would be more useful 
	if the code worked for ANY number of students. Modify the code to use the sizeof() 
	function so the code will work correctly no matter how many student ages are stored 
	in the array. Be sure to make changes throughout the code as needed. You do not to 
	change modify4.html which just runs the program.
-->
<html>
<head>
	<title>Modify 4</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>AVERAGE AGE</h1>

	<?php
	
		$studentAges = array(21, 24, 37, 29, 55, 33, 47, 24, 19, 22);
		
		$total = 0;
		for ($i = 0; $i < sizeof($studentAges); $i=$i+1)
		{
			$total = $total + $studentAges[$i];
		}

		$averageAge = $total / sizeof($studentAges);
		
		print("<p>The average student age is ".number_format($averageAge,2)."</p>");

	?>
</body>
</html>
