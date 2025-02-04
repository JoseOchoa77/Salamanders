<!--	Author:
		Date:
		File:	regex.php
-->
<html>
<head>
	<title>Regex Demo</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body style = "width:300; border-style:groove; padding:20px; border-color:red">
	<h1>Regex Demo</h1>
<?php
        $code = filter_var(trim($_POST["code"]), FILTER_SANITIZE_STRING);
        $pattern = "#[A-Z]{3}[0-9]{6}[a-z]?#";
        if (preg_match($pattern, $code))
            print("<p>The product code is accepted");
        else 
            print("<p>The product code is not valid");
?>
    <p><a href="regex.html">Submit another code</a></p>

</body>
</html>

