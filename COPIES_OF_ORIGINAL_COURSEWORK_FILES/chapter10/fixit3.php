<!DOCTYPE html>
<!--Author:
	Date:
	File:	  fixit3.php
	Purpose:  What's wrong here?
			  The total should be $4500 based on the numbers in
			  sales.txt, but the program is  calculating the total
			  as $1200 (which happens to be two times
			  the last number in the file .. hmmm...)
-->

<html>
<head>
	<title>FixIt3</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$totalSales = 0;
		$salesFile = fopen("sales.txt", "r");
		$nextSale = trim(fgets($salesFile));
		while (!feof($salesFile) )
		{
			$totalSales = $nextSale + $nextSale;
			$nextSale = trim(fgets($salesFile));
		}
		fclose ($salesFile);

		print("<p>TOTAL SALES: $$totalSales</p>");

	?>
</body>
</html>
