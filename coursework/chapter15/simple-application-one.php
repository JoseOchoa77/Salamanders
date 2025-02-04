<!DOCTYPE html>

<html>
<head>
	<title>Account Finder</title>
	<link rel ="stylesheet" type="text/css" href="sample.css"  />
</head>
<body>
<?php
	include("inc-simple-application-one-object.php");

	$id = $_POST['id'];

	$account = new Account();

	$account->findAccount($id);

	print ("<p>Account name is ".$account->getFirstName()." ". $account->getLastName()."</p><br>");
?>
</body>
</html>
