<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/10/25
	File:	modify2.php
	Purpose:Chapter 11 Exercise

	modify2.php displays the numbers stored in an array with 10 elements. Modify the loop so that the program only displays the first 6 values in the array. Now modify the loop AGAIN so that it only displays the values in the 3rd, 4th, 5th, and 6th elements (these are the values 80, 50, 60, and 14).  
	HINT: The FOR loop $i variable is counting from 0 to 9 so it can be used to index each element in the array. How do we change this so that it will only index the 3rd, 4th, 5th, and 6th elements?

-->

<html>
<head>
	<title>Modify 2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Modify 2</h1>

	<?php
	
		$numbers = array(10, 24, 80, 50, 60, 14, 72, 90, 43, 12);

		print ("<table>");
		for ($i = 2; $i < 6; $i=$i+1)
		{
			print ("<tr><td>$numbers[$i]</td></tr>");
		}
		print ("</table>");
	?>
</body>
</html>
