<!DOCTYPE html>
<!--		Author: Mike O'Kane
		Date:	August 15, 2007
		File:	quiz-program.php
		Purpose:This is an example of a PHP program that reads a file
				in order to generate a form for the user.
				The form contains three quiz questions that are read from
				a file named test-bank.txt file. Each line of test-bank.txt
				contains a question, three possible answers and the correct
				answer,	separated by colons.
				Note that the program has to:
				Open the file, read the three lines, and close the file.
				Explode each line into the question, possible answers and
				correct answer and assign these to variables
				Display each question variable followed by a drop-down list
				that uses the variables	containing the possible answers as
				options.
				Send the three correct answers as hidden fields so that
				quiz-results.php can test the user's answers against these.

				Note how careful you need to be to use the \" when quotes
				are part of the HTML code in your print statements.
-->
<html>

<head>
	<title>EXAM GRADES</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
	<?php

		$testbankFile =fopen("test-bank.txt", "r");

		$line1 = trim(fgets($testbankFile));
		$line2 = trim(fgets($testbankFile));
		$line3 = trim(fgets($testbankFile));
		
		fclose ($testbankFile );

		list($question1, $answer1a, $answer1b, $answer1c, $correct1) = 
										explode (":", $line1);
		list($question2, $answer2a, $answer2b, $answer2c, $correct2) = 
										explode (":", $line2);
		list($question3, $answer3a, $answer3b, $answer3c, $correct3) = 
										explode (":", $line3);


		print (" <h1>MULTIPLE CHOICE TEST</h1>");

		print("<form action = \"quiz-results.php\" method = \"post\">");
		print("<label>1: $question1");
		print("<select name = \"answer1\">");
		print("<option>$answer1a</option>");
		print("<option>$answer1b</option>");
		print("<option>$answer1c</option>");
		print("</select></label>");

		print("<label>2: $question2");
		print("<select name = \"answer2\">");
		print("<option>$answer2a</option>");
		print("<option>$answer2b</option>");
		print("<option>$answer2c</option>");
		print("</select></label>");

		print("<label>3: $question3");
		print("<select name = \"answer3\">");
		print("<option>$answer3a</option>");
		print("<option>$answer3b</option>");
		print("<option>$answer3c</option>");
		print("</select></label>");

		print("<input type = \"hidden\" name = \"correct1\" 
								value = \"$correct1\">");
		print("<input type = \"hidden\" name = \"correct2\" 
								value = \"$correct2\">");
		print("<input type = \"hidden\" name = \"correct3\" 
								value = \"$correct3\">");
	?>

	<input class = "submit" type = "submit" value = "Submit your test now">
	</form>

</body>
</html>
