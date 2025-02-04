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
$responses = array(1 => "Al", 2 => "Howard", 3 => "Newt", 4 => "Kenya");
$responseNum = rand(1,4);
$_SESSION['responseNum'] = $responseNum;

print("<form action =\"web-sessions-number-8.2.php\" method = \"post\">
<label>".$responses[$responseNum]."</label>
<select>
<option>".$responses[$responseNum]." who?</option>
</select>
<input class=\"submit\" type=\"submit\" value=\"next\">");
?>

</body>

</html>
