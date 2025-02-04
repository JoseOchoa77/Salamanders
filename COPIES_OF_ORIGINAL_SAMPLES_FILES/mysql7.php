<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	December, 2012
		File:	mysql7.php
		Purpose:MySQL Example
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>

<body>

<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}

$userQuery = "SELECT AVG(hourlyWage) FROM personnel";

$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>RESULTS</h1>");

	$row = mysqli_fetch_assoc($result);
	print ("<p>Average hourly wage: $".number_format($row['AVG(hourlyWage)'], 2)."</p>");
	
}

mysqli_close($connect);   // close the connection
 
?>
</body>
</html>
