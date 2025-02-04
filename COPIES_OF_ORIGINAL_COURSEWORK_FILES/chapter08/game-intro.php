<!DOCTYPE html>
<!--Author:
	Date:
	File:	game-intro.php
	Purpose:Chapter 8 Exercise

-->


<html>
<head>
	<title>gameIntro</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
			$charName = $_POST['charName'];
			$charType = $_POST['charType'];
			$healthTokens = $_POST['healthTokens'];
			$expTokens = $_POST['expTokens'];
			$supplyTokens = $_POST['supplyTokens'];
	
			$goldSpent = $healthTokens / 10 + $expTokens / 2 + $supplyTokens / 25;
			
				print	("<h1>HEY THERE, $charName!</h1>");
				print ("<p>YOU SPENT MORE GOLD THAN YOU HAVE!</p>");
				print ("<p>GO BACK AND TRY THAT AGAIN - YOU HAVE 10 GOLD PIECES..</p>");
						

				print("<h1>You have created $charName the $charType!</h1>");
				print("<p>$charName has <strong>$healthTokens</strong> health tokens,
							<strong>$expTokens</strong> experience tokens, and 
							<strong>$supplyTokens</strong> supply tokens.</p>");
				print("<p>You received some bonus tokens! :)</p>");							
				print("<p>$charName has spent <strong>$goldSpent</strong> gold pieces, ");
				print("and has <strong>$goldLeft</strong> gold pieces left.</p>");
			}
	?>

</body>
</html>
