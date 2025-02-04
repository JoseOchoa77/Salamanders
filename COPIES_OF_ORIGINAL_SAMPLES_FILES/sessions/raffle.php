<?php
	session_start();
?>
<!--	Author:
		Date:
		File:	raffle.php
		Purpose: Example of a Web Session

-->

<html>
<head>
	<title>RAFFLE</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
	$_SESSION['fullName'] = $_POST['fullName'];
	$_SESSION['city'] = $_POST['city'];
	$ticketNum = $_POST['ticketNum'];

	if ($ticketNum == "45678")
	{
		print("<h1>".$_SESSION['fullName'].", you won!!</h1>");
		print("<form action = \"choose-prize.php\" method = \"post\" >
				<label>Choose a prize: 
				<select name = \"prize\"> 
				<option>New TV</option>
				<option>New Laptop</option>
				<option>Used Pair of Socks</option>
				</select></label>
			<input class = \"submit\" type = \"submit\" value = \"How to Collect Your Prize\">
			</form>");
	}
	else 
		print("<h1>Sorry ".$_SESSION['firstName'].", you didn't win anything - better luck next time..</h1>");
?>	
</body>
</html>
