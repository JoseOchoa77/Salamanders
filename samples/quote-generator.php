<!DOCTYPE html>
<!--	
	Author: Mike O'Kane
	Date:	August 15, 2007
	File:	quote-generator.php
	Purpose: Write a randomly generated quote
	The code generates a random value $quoteNumber between 1 and 20, 
	then uses a loop to read that many lines in a file containing 10 quotes.
	The quote at the line indicated by $quoteNumber is stored in $quote 
	which is then displayed.

-->
<html>
<head>
	<title>QUOTE OF THE DAY</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" >
</head>

<body>

	<h1>QUOTE OF THE DAY</h1>

<?php
	srand((double) microtime() * 10000000); 		// seed the random number generator

	$quoteNumber = rand(1, 20);						// get a random value between 1 and 20

	$quoteFile =fopen("quotes.txt","r");			// open the quotes file

	for($line = 1; $line <= $quoteNumber; $line++)	// read lines in the file up to 
													// line $quoteNumber

		$quote = trim(fgets($quoteFile));					// you now have a random quote!

	fclose($quoteFile);								// close the file

	print("<p>$quote</p>");							// output the quote
?>

	<p><form action = "quote-generator.php" method = "post" >

		<input class = "submit" type = "submit" value = "GET ANOTHER QUOTE">

	</form>
	</p>

</body>
</html>
