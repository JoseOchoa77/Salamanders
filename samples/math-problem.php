<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	math-problem.php
		Purpose:HTML Practice
-->

<html>
<head>
	<title>Math Problem</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>Can you add these numbers?</h1>

	<form action = "math-solution.php" method = "post" >

	<?php
		$num1 = rand(1, 20);
		$num2 = rand(1, 20);

		print("<label>$num1 + $num2 = ");
		print("<input type = \"text\" size = \"5\" name = \"sum\">");
		print ("</label>");
		print("<input type = \"hidden\" name = \"num1\" value = \"$num1\">");
		print("<input type = \"hidden\" name = \"num2\" value = \"$num2\">");
	?>
		<input class = "submit" type = "submit" value = "Did I add them correctly?">
    </form>

</body>
</html>
