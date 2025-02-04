<!DOCTYPE html>
<!--Author: Jose Ochoa
	Date: 01/15/25
	File:	 my-info.php
	Purpose: Chapter 12 Exercise
	
-->

<html>
<head>
	<title>My Address</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php		

  $myInfo['firstName'] = "Jose";
	$myInfo['lastName']	= "Ochoa";
  $myInfo['street']	= "1121 Bakers Lane";
  $myInfo['city']	= "Asheville";
  $myInfo['state']	= "North Carolina";
  $myInfo['zip']	= "21121";
  $myInfo['email']	= "Example@html.com";
  $myInfo['phone']	= "111-222-3333";

  print("<p>".$myInfo['firstName']." ".$myInfo['lastName'].",<br> ".$myInfo['street']." ".$myInfo['city'].",<br> ".$myInfo['city'].", ".$myInfo['state'].", ".$myInfo['zip']."<br> ".$myInfo['email']." ".$myInfo['phone']."</p>");
	?>
</body>
</html>
