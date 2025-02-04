<?php
	session_start();
?>

<!--	Author: Mike OKane
		Date:	December 2007
		File:	session1.php
		Purpose:Simple Web session
-->
<html>
<head>
	<title>Session Example</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Session Example</h1>

	<?php
		if (isset($_SESSION['userName']) )
		{
			print ("<h1>WELCOME BACK ".$_SESSION['userName']."!</h1>");
		}
		else
		{
			$_SESSION['userName'] = $_POST['userName'];
			print("<h1>WELCOME ".$_SESSION['userName']."!</h1>");
		}

	?>
</body>
</html>

