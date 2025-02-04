<!DOCTYPE html>
<!--	Author: 	Mike O'Kane
		Date:		April 15, 2021
		File:		lists.php
		Purpose: 	HTML Example - introducing HTML lists
-->

<html>
<head>
	<title>HTML Lists</title>
	
	<style>
        body {   
            background: white;); 
            width:600px; padding:25px;
            font-family: Arial, Helvetica, Sans-serif;
        }
        span.leftCol {float:left; }
        span.rightCol {float:right;}
        h1 {size: 16pt; margin:5px; color:red; text-align:center}
        h2 {size:10pt; color:red}
        hr { margin:auto; width:35%; height:3px; color:red; background-color:red }
        dt {font-weight:bold;margin-left:25px}
        
	</style>
</head>
<body>

<h1>HTML Lists</h1>
<hr>
<p> This page demonstrates the use of different HTML lists. 
The page layout includes two columns, which is achieved using the &lt;span&gt; tag. 
This tag is introduced in Chapter 17.</p>

<span class="leftCol">
<h2>Ordered List (a to c)</h2>
 <ol type = "a">
<li>Coding is fun</li>
<li>There are many different careers</li>
<li>Employment outlook is good</li>
</ol>
</span>

<span class="rightCol">
<h2>Ordered List (i to iii)</h2>
 <ol type = "i">
<li>Coding is fun</li>
<li>There are many different careers</li>
<li>Employment outlook is good</li>
</ol>
</span>

<span class="leftCol">
<h2>Bulleted List (squares)</h2>
 <ul type = "square">
<li>Coding is fun</li>
<li>There are many different careers</li>
<li>Employment outlook is good</li>
</ul>
</span>

<span class="rightCol">
<h2>Bulleted List (circles)</h2>
 <ul type = "circle">
<li>Coding is fun</li>
<li>There are many different careers</li>
<li>Employment outlook is good</li>
</ul>
</span>

<span class="lefttCol">
<h2>Definition List</h2>
<dl>
<dt>VCS</dt><dd>Stands for Version Control System.</dd>
<dt>git</dt><dd>A freely available open source version control software, 
available for Windows, macOS, and Linux.</dd>
<dt>GitHub</dt><dd>A cloud-based repository, founded on git, 
that facilitates distribution, collaboration, and project development.</dd>
</dl>
</span>
 
</body>
</html>

