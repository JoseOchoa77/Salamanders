<!DOCTYPE html>
<!--	Author: 	
		Date:	    
		File:		mileage-log.php
		Purpose:	
-->
<html>
<head>
	<title>Mileage Log</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<?php
		$mileage = $_POST['mileage'];
		
		$logFile =fopen("mileage-log.txt","a");
		fputs($logFile, "$mileage\n");
		fclose($logFile );
		print (" <h1>Your mileage submission ($mileage) has been recorded:</h1>");
		
		
		print (" <p><a href = \"mileage-log.html\">Return to mileage form</a></p> ");
	?>
</body>
</html>
