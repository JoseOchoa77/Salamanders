<!DOCTYPE html>
<!--	Author: 	Mike O'Kane
		Date:		April 15, 2021
		File:		date-time.php
		Purpose: 	HTML Example - Time and Date functions
-->

<html>
<head>
<title>Time and Date functions</title>
<style>
    body {width:600px;font-family: Arial, Helvetica, Sans-serif;padding:15px;}
    h1 {font-size:18pt}
    h2 {font-size:12pt}
    p.desc {font-style:italic;}
    p.code {font-size:10pt; color:darkgreen; margin-left:25px}
    p.result{font-weight:bold; color:black;margin-left:25px}
    div.heading {height:50px; padding:10px; background: red; color:white; }
    div.main {background:white; color:black;font-size:12pt}
    div.footer {height:50px; padding:10px; background:green; font-size:10pt;  color:white }
    span.green {font-weight:bold; color:green; font-style:italic; font-size:10pt}
    span.red {font-weight:bold; color:red; font-style:italic; font-size:14pt}
</style>
</head>

<body>
<div class="heading">
<h1>PHP Time and Date functions</h1>
<h2>Using the &lt;div&gt; and &lt;span&gt; tags</h2>
</div>

<div class="main">
<?php

print ("<p class=\"desc\">To display the time of day (hour and minutes) in 12-hour format followed by 'am' or 'pm':</p>");

	print ("<p class=\"code\">PHP CODE: print(\"&lt;p&gt;The time is \".date(\"g:ia\").\"&lt;/p&gt;\"); </p>");
	
	print("<p class=\"result\">The time is ".date("g:ia")."</p>");

print ("<p class=\"desc\">To display the <strong>day</strong> of the week:</p>");

    print ("<p class=\"code\">PHP CODE: print(\"&lt;p&gt;Today is a \".date(\"l\").\"&lt;/p&gt;\"); </p>");
    
	print("<p class=\"result\">Today is a ".date("l")."</p>");

print ("<p class=\"desc\">To provide a morning wake up message consisting of the time, day of the week, name of the month, followed by the day and a suitable suffix ('st', 'rd', or 'th'), and the year:</p>");

	print ("<p class=\"code\">PHP CODE: print(\"&lt;p&gt;Good morning! It's \". date(\"g:ia, l F jS, Y\").\"&lt;/p&gt;\"); </p>");

	print("<p class=\"result\">Good morning! It's ". date("g:ia, l F jS, Y")."</p>");

print ("<p class=\"desc\">A copyright notice is often a necessary feature on a Web page. A string returned by the date() function can be concatenated with other text to ensure that the notice always displays the current year, for example 'Copyright © 2021'.  In the example below the “&copy;” part of the string is an HTML entity that will display the copyright symbol, entities are explained in chapter 17.</p>");

	print ("<p class=\"code\">PHP CODE: print(\"&lt;p&gt;Copyright &copy; \".date(\"Y\").\"&lt;/p&gt;\"); </p>");
	
	print("<p class=\"result\">Copyright &copy; ".date("Y")."</p>");

print ("<p class=\"desc\">Here’s another interesting use of a formatted date string. It is often useful to include a date as part of the  name of a data file (such as those rainfall files you worked with in Chapter 6). This is useful for reference, and a 'year-month-day' format will also ensure that similarly named files will be listed in date order when sorted by name. Here is a statement that creates a file name by concatenating a formatted date with a filename that begins 'rainfall-' and ends with the extension '.txt':</p>");

print ("<p class=\"code\">PHP CODE: <br>
&dollar;fileName = \"rainfall-\".date(\"Y-m-d\").\".txt\";<br>
print(\"&lt;p&gt;The filename is &dollar;fileName&lt;/p&gt;\"); </p>");

$fileName = "rainfall-".date("Y-m-d").".txt";
print("<p class=\"result\">The filename is $fileName</p>");

print ("<p class=\"desc\">One way to create a timestamp is to use the PHP mktime() function, which takes 6 parameters (hour, minute, second, month, day, year). You could use this for example to check the day of your birthday:</p>");

print ("<p class=\"code\">PHP CODE: <br>
&dollar;birthday = mktime (0,0,0,4,14,2021);<br>
print(\"&lt;p&gt;My birthday will be on a \".date(\"l\", &dollar;birthday).\"&lt;/p&gt;\"); </p>");

$birthday = mktime (0,0,0,4,14,2021);
print("<p class=\"result\">My birthday will be on a ".date("l", $birthday)."</p>");

print ("<p class=\"desc\">You can easily improve this code so it will continue to work over time, for any year, by first using the date() function to obtain the current year, then including this as the year parameter in the call to mktime():</p>");

print ("<p class=\"code\">PHP CODE: <br>
&dollar;year = date(\"Y\");<br>
&dollar;birthday = mktime (0,0,0,4,14,&dollar;year);<br>
print(\"&lt;p&gt;My birthday will be on a \".date(\"l\", &dollar;birthday).\"&lt;/p&gt;\"); </p>");

$year = date("Y");
$birthday = mktime (0,0,0,4,14,$year);
print("<p class=\"result\">My birthday will be on a ".date("l", $birthday)."</p>");

?>

<div class="footer">
<h1 style="color:white"></h1>
<p></p>
</div>

</body>
</html>

