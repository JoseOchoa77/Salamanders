<?php
	session_start();
?>

<!--	Author: Mike OKane
		Date:	December 2007
		File:	gold-hunter1.php
		Purpose:Simple Web session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		if (isset($_SESSION['userName']) ) // game is in progress
		{
			
			print ("<h1>WELCOME BACK ".$_SESSION['userName']."!</h1>");
			
			if ($_SESSION['health'] < 1)
			{
				print ("<p>Oh No! You lost all your health points!</p>");
				print("<p><a href = \"gold-hunter.html\">Start Again?</a></p>");
				session_destroy();
			}
			else if ($_SESSION['gold'] >=100)
			{
				print ("<p>CONGRATULATIONS! You have 100 pieces of gold!</p>");
				print("<p><a href = \"gold-hunter.html\">Start Again?</a></p>");
				session_destroy();
			}
 			else
			{
				print ("<p>HEALTH: ".$_SESSION['health']."</p>");
				print ("<p>GOLD: ".$_SESSION['gold']."</p>");
				print("<p><a href = \"gold-hunter2.php\">Return to the Forest?</a></p>");
			}
			
		}
		else if (empty($_POST['userName']) ) // Game not started but no input!
		{
			print("<h1>Oops! No User Name!</h1>");
			print("<p><a href = \"gold-hunter.html\">Click here to go to the Start Page</a></p>");
		}
		else			// game not started. Get the name and start the game
		{
			$_SESSION['userName'] = $_POST['userName'];
			$_SESSION['health'] = 10;
			$_SESSION['gold'] = 0;
			print("<h1>WELCOME ".$_SESSION['userName']."!</h1>");
			print ("<p>Each time you enter the forest, you may find gold or lose health points.
				Your goals is to find 100 pieces of gold before you lose all your health.</p>");
			print ("<p>HEALTH: ".$_SESSION['health']."</p>");
			print ("<p>GOLD: ".$_SESSION['gold']."</p>");
			print("<p><a href = \"gold-hunter2.php\">Enter the forest?</a></p>");
		}
	?>

</body>
</html>

