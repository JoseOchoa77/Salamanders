<!DOCTYPE html>
<!--Author:
	Date:
	File:	  find-character.php
	Purpose:
	
-->

<html>
<head>
	<title>Find a Character</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php

		$searchName = $_POST['searchName'];
		$notFound = true;
		
		$charFile = fopen("characters.txt", "r");
		$nextLine = trim(fgets($charFile));

		// TO SAVE YOU TIME SOME CODE HAS ALREADY BEEN PROVIDED. 
		// YOU WILL NEED TO ADD CODE INSIDE THE LOOP TO MEET THE REQUIREMENTS
		
		while (!feof($charFile) )
		{
			list($charName, $charType, $healthTokens, $expTokens, $supplyTokens) 
								= explode (",", $nextLine);

			print ("<h1>$charName the $charType</h1>");
			print ("<p>$charName has $healthTokens health tokens,
							$expTokens experience tokens,
							and $supplyTokens supply tokens,</p>");

			$nextLine = trim(fgets($charFile));
		}
		fclose ($charFile);

		if ($notFound) 
		{
			print ("<h1>$searchName Not Found</h1>");
			print ("<p>SORRY! $searchName does not appear to exist!</p>");
		}
	?>
</body>
</html>
