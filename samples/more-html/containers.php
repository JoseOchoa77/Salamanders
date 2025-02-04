<!DOCTYPE html>
<!--	Author: 	Mike O'Kane
		Date:		April 15, 2021
		File:		containers.php
		Purpose: 	HTML Example - DIV and SPAN
-->

<html>
<head>
<title>Container Example</title>
<style>
    body {width:400px;font-family: Arial, Helvetica, Sans-serif;padding:15px;}
    h1 {font-size:18pt}
    h2 {font-size:12pt}
    div.heading {height:100px; padding:10px; background: red; color:white; }
    div.main {background:white; color:black;font-size:12pt}
    div.footer {height:100px; padding:10px; background:green; font-size:10pt;  color:white }
    span.green {font-weight:bold; color:green; font-style:italic; font-size:10pt}
    span.red {font-weight:bold; color:red; font-style:italic; font-size:14pt}
</style>
</head>

<body>
<div class="heading">
<h1>Container Example</h1>
<h2>Using the &lt;div&gt; and &lt;span&gt; tags</h2>
</div>

<div class="main">
<h1>This page demonstrates the use of containers.</h1>
<p>The <code>div</code> &female; tag is used to create <strong>three</strong> block containers, for the 
<span class="red">header, main, and footer</span> areas of the page. Block containers begin 
on a new line. The &lt;span&gt; tag is used to create in-line containers which do not begin 
on a new line and contain elements across the page that are located within the opening and 
closing &lt;span&gt; and &lt;/span&gt; tags. <span class="green">The sections of this paragraph 
in green and red, with different font sizes. are contained within two different &lt;span&gt;s 
and use different CSS</span>. Chapter 17 discusses this topic, and explains the CSS.
</p>

<div class="footer">
<h1 style="color:white">This is the footer section..</h1>
<p>Web pages often use a footer section to provide general information about a Web site.</p>
</div>

</body>
</html>

