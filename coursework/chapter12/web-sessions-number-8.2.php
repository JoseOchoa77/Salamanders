<?php
  session_start();
?>

<html>
<head>
	<title>Web Sessions exercise 8</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>

<body>
<?php
$responseNum = $_SESSION['responseNum'];
$finalResponse = array(1 => "Al let you know when I answer the door.", 2 => "Good. Howard you?", 3 => "Not much. What's newt with you?", 4 => "Kenya answer the door? All this knocking is driving me crazy!");

print("<form action =\"web-sessions-number-8.0.html\" method = \"post\">
<label>".$finalResponse[$responseNum]."</label>
<select>
<option>*Walk away from door*</option>
</select>
<input class=\"submit\" type=\"submit\" value=\"new joke\">");
?>
</body>

</html>
