<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit5.php
	Purpose:  This program is supposed to total the ten sales figures in
			  file sales.txt but it's not working correctly. The total
			  should be $45000 not $0
			  Can you fix it? Hint: the problem is with the the way the total is accumulated.
-->

<html>
<head>
	<title>Sales</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Sales</h1>

	<?php
		$total = 0;
		$salesFile = fopen("sales.txt", "r");

		for ($count = 1; $count <= 10; $count = $count + 1)
		{
			$nextSalesAmount = trim(fgets($salesFile));
			$total = $total + $total;
		}
		fclose($salesFile);
		print ("TOTAL SALES: $$total");
	?>
</body>
</html>
