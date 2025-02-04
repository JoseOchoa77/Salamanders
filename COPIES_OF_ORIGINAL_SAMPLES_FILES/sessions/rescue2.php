<?php
	session_start();
?>

<!--	Author: Mike OKane
		Date:	December 2007
		File:	rescue2.php
		Purpose:Simple game to illustrate a Web Session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	

	<?php
		$locations = array(	"the northern mountains", 
				 	"the lake shores",
					"a flooded village",
					"the inner city",
					"the farmlands to the east",
					"the swamps",
					"the southern plains",
					"the suburbs");
		$index = rand(0,7);
		$currentLocation = $locations[$index];

		if (isset($_SESSION['userName']) )
		{

			print ("<h1>Rescue!</h1>");
			print ("<p>".$_SESSION['userName']." searches $currentLocation for more families!</p>");

			$days = rand (1, 4);
			$_SESSION['daysLeft'] = $_SESSION['daysLeft'] - $days;

			$found = rand (1, 10);
			$_SESSION['numFamilies'] = $_SESSION['numFamilies'] + $found;

			if ($found == 1 and $days == 1)
				print("<p>This trip lasted 1 day and you found 1 family!</p>");
			elseif ($found == 1)
				print("<p>This trip lasted $days days and you found 1 family!</p>");
			elseif ($days == 1)
				print("<p>This trip lasted 1 day and you found $found families!</p>");
			else 
				print("<p>This trip lasted $days days and you found $found families!</p>");

			print("<p><a href = \"rescue1.php\">Now take these families to safety!</a></p>");
		}
		else
		{
			print("<h1>Oops! No User Name!</h1>");
			print("<p><a href = \"rescue.html\">Click here to go to the Start Page</a></p>");
		}
	?>

</body>
</html>

