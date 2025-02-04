<!DOCTYPE html>
<!--Author:
	Date:
	File:	  modify2.php
	Purpose:  Add the necessary code to modify2.php so that the
			  program finds the highest sale in the file.
			  Hint: the correct answer is 900
-->

<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$highestSale = 0;

		$salesFile = fopen("sales.txt", "r");
		$nextSale = trim(fgets ($salesFile));

		while (!feof($salesFile) )
		{


			$nextSale = trim(fgets ($salesFile));
		}
		fclose ($salesFile);

		print("<p>HIGHEST SALE AMOUNT: $highestSale</p>");

	?>
</body>
</html>
