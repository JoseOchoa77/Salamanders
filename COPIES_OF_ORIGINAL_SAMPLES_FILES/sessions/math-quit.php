<?php
	session_start();
?>

<!--	Author: Mike O'Kane
		Date:	December 2007
		File:	math-quit.php
		Purpose: Web session example
-->
<html>

<head>
	<title>Math Quiz - RESULT</title>
	<link rel ="stylesheet" type="text/css" href="quiz.css">
</head>
<body>
<?php
    print ("<div class='heading'>");
    print ("<h1>Thanks for Playing the Math Quiz! </h1>");
    print ("</div>");
	print("<h2>YOU SCORED ".$_SESSION['score']." OUT OF ".$_SESSION['count']."</h2>");
	session_destroy();
	print (" <p><a href = \"math-quiz.php\">Try Again?</a></p> ");
?>
</body>
</html>
