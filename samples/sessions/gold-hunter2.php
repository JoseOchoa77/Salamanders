<?php
	session_start();
?>

<!--		Author: Mike O'Kane
		Date:	December, 2007
		File:	gold-hunter2.php
		Purpose:Simple Web session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		// Two arrays with scene descriptions
		
		$goodEvents = array("You fall down a rabbit hole and find some gold!", 
				 			"You pan gold from the river..",
							"Would you believe it! You find gold in your own pockets!",
							"You rescue a dog and the grateful owners give you ... gold!",
							"Climbing a mountain you find gold in a cave");
		$badEvents = array(	"You fall down a rabbit hole and sprain your ankle",
							"You try and cross the river and get swept downstream",
							"The weather is awful! You catch a cold",
							"A bear steals your food and you wear yourself out chasing it",
							"Climbing a mountain you fall and hurt your head");
		
		if (isset($_SESSION['userName']) )  // provide a scene
		{

			print ("<h1>".$_SESSION['userName']." ENTERS THE FOREST!</h1>");
			
			$luck = rand (1, 10);
			 
			 if ($luck < 4) // bad event will be chosen
			 {
				$_SESSION['health'] = $_SESSION['health'] - $luck;
				
				$event = rand (0, 4); // to select one of the badEvents array elements
				
				print("<p>".$badEvents[$event]."</p>");
				print("<p>You lose $luck health points!</p>");
			}
			else  // good event will be chosen
			{
				$_SESSION['gold'] = $_SESSION['gold'] + $luck;
				
				$event = rand (0, 4); // to select one of the goodEvents array elements
				
				print("<p>".$goodEvents[$event]."</p>");
				print("<p>You found $luck pieces of gold!</p>");
			}
			print("<p><a href = \"gold-hunter1.php\">Return home</a></p>");
		}
		else 			// user did not begin the game on the right page 
		{
			print("<h1>Oops! No User Name!</h1>");
			print("<p><a href = \"gold-hunter.html\">Click here to go to the Start Page</a></p>");
		}
	?>

</body>
</html>

