<!DOCTYPE html>
<!--Author:
	Date:
	File:	  modify1.php
	Purpose:  Change the code in modify1.php so that the
			  program counts the number of people who
			  have retired (65 or older) and the number
			  of people who have not yet retired.
			  Hint: the correct numbers are:
			  3 (retired)
			  7 (not retired)
-->

<html>
<head>
	<title>Modify1</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$retired = 0;
		$notRetired = 0;

		$agesFile = fopen("ages.txt", "r");
		$nextAge = trim(fgets($agesFile));
		while (!feof($agesFile) )
		{


			$nextAge = trim(fgets($agesFile));
		}
		fclose ($agesFile);

		print("<p>Number of retired people: $retired</p>");
		print("<p>Number of people not retired: $notRetired</p>");
	?>
</body>
</html>
