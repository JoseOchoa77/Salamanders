<!DOCTYPE html>
<!--	Author: Mike O'Kane
		Date:	August 15, 2007
		File:	smoking.php
		Purpose:Illustrate the use of appending to a file
-->
<html>
<head>
	<title>Smoking Survey</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		$yearsSmoked = $_POST['yearsSmoked'];
		$smokedDaily = $_POST['smokedDaily'];
		$firstName 	 = $_POST['firstName'];
		$lastName 	 = $_POST['lastName'];

		$surveyFile =fopen("smoking-survey.txt","a");

		fputs($surveyFile, "$firstName:$lastName:$yearsSmoked:$smokedDaily\n");

		fclose($surveyFile);

	    print("<h1>Thank you for participating!</h1>");
		print("<p>Your data has been added to our survey.</p>");

		print (" <p><a href = \"smoking-survey.html\">Return to the Survey form</a></p> ");
	?>
</body>
</html>
