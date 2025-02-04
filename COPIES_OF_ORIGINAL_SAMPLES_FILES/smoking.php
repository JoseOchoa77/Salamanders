<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	smoking.php
		Purpose:PHP Practice
-->
<html>
<head>
	<title>Smoking Calculator - RESULTS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
	$yearsSmoked = $_POST['yearsSmoked'];
	$smokedDaily = $_POST['smokedDaily'];
	$firstName 	 = $_POST['firstName'];
	$lastName 	 = $_POST['lastName'];

	$totalCigarettes = $yearsSmoked * 365 * $smokedDaily;

	print (" <h1>Smoking Calculator Results for $firstName $lastName</h1>");
	
	print("<p>Years you have smoked: $yearsSmoked<br>");
	print("Average smoked daily: $smokedDaily</p>");

	print ("<p>$firstName, you have smoked approximately $totalCigarettes cigarettes.</p> ");

	print (" <p><a href = \"smoking.html\">Return to Calculator</a></p> ");

?>
</body>
</html>
