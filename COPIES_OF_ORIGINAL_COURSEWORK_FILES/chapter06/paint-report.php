<!DOCTYPE html>
<!--	Author:
		Date:
		File:	paint-report.php
		Purpose: Chapter 6 Exercise
		
-->

<html>
<head>
	<title>Paint Report</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<h1>MONTHLY REPORT</h1>

	<?php




		print("<p>INCOME FROM PAINT CONTRACTS:</p><hr>");
		print("<p>$".number_format($payment1, 2)."<br>");
		print("$".number_format($payment2, 2)."<br>");
		print("$".number_format($payment3, 2)."<br>");
		print("$".number_format($payment4, 2)."<br>");
		print("$".number_format($payment5, 2)."</p>");
		print("<hr><p><strong>TOTAL: $".number_format($total, 2)."</strong></p><hr>");
	?>

</body>
</html>
