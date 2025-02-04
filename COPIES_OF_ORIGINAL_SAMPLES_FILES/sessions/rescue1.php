<?php
	session_start();
?>

<!--	Author: Mike OKane
		Date:	December 2007
		File:	rescue1.php
		Purpose:Simple game to illustrate a Web Session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		if (isset($_SESSION['userName']) )
		{
			
			print ("<h1>Rescue!</h1>");
			print ("<p>Welcome back ".$_SESSION['userName']."!</p>");
			if ($_SESSION['daysLeft'] < 1)
			{
				print ("<p>Oh No you have no time left!</p>");
				print ("<p>You were not able to rescue 50 families!</p>");
				print("<p><a href = \"rescue.html\">Start Again?</a></p>");
				session_destroy();
			}
			else if ($_SESSION['numFamilies'] >=50)
			{
				print ("<p>CONGRATULATIONS! You have rescued 50 families!</p>");
				print("<p><a href = \"rescue.html\">Try Again?</a></p>");
				session_destroy();
			}
 			else
			{
				print ("<p>DAYS LEFT: ".$_SESSION['daysLeft'].", ");
				print ("FAMILIES RESCUED: ".$_SESSION['numFamilies']."</p>");
				print("<p><a href = \"rescue2.php\">Try again?</a></p>");
			}
			
		}
		else if (empty($_POST['userName']) )
		{
			print("<h1>Rescue!</h1>");
			print("<h1>OOPS! NO USER NAME!</h1>");
			print("<p><a href = \"rescue.html\">Click here to go to the Start Page</a></p>");
		}
		else
		{
			$_SESSION['userName'] = $_POST['userName'];
			$_SESSION['daysLeft'] = 30;
			$_SESSION['numFamilies'] = 0;

			print("<h1>Rescue!</h1>");
			print("<p>Welcome ".$_SESSION['userName']."!</p>");
			print ("<p>There has been major flooding in the area!</p>
				<p>Your mission is to rescue
				50 families over the next 30 days.</p>
				<p>Are you ready!</p>");
			print ("<p>DAYS LEFT: ".$_SESSION['daysLeft']."!</p>");
			print ("<p>FAMILIES RESCUED: ".$_SESSION['numFamilies']."!</p>");

			print("<p><a href = \"rescue2.php\">Start searching!</a></p>");

		}

	?>

</body>
</html>

