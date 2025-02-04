<!DOCTYPE html>
<!--	Author: Mike OKane
		Date:	April 15, 2021
		File:	book-keeping.php
		Purpose:PHP Practice
-->
<html>
<head>
	<title>Learn Book-Keeping</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>
	<h1>Book-Keeping Modules</h1>

	<?php
	
        $module [0] = "BKG 101: Getting Started";
        $module [1] = "BKG 115: Book-Keeping Fundamentals";
        $module [2] = "BKG 120: Working with Spreadsheets";
        $module [3] = "BKG 130: Business Processes 1";
        $module [4] = "BKG 230: Business Processes 2";
        $module [5] = "BKG 240: Final Project, Starting a Business";
        
		$experience  = $_POST['experience'];

		print ("<p>Based on your experience, we suggest that
                you begin with:</p><p> <strong>". $module[$experience]."</strong>.</p>");
	?>
	<a href = "book-keeping.html">Return to Form</a>
</body>
</html>
