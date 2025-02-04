<!--	Author:
		Date:
		File:	test-filter-var.php
-->
<html>
<head>
	<title>Test sanitizing</title>
	<link rel ="stylesheet" type="text/css" href="sample.css" />
</head>

<body style = "width:400; border-style:groove; padding:20px; border-color:red">
	<h1>Test filter_var()</h1>
<?php
/*
    Note that FILTER_FLAG_NO_ENCODE_QUOTES will prevent quotes from
    being converted with FILTER_SANITIZE_STRING:
    filter_var($_POST['other'], FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
    BUT this does NOT work with FILTER_SANITIZE_SPECIAL_CHARS
*/
    if ($_POST['filter'] == "FILTER_SANITIZE_STRING") {
        $city = filter_var($_POST['city'], FILTER_SANITIZE_STRING);
        $filter = filter_var($_POST['filter'], FILTER_SANITIZE_STRING);
        $other = filter_var($_POST['other'], FILTER_SANITIZE_STRING);
        print("<p>SANITIZED (STRIPPED): $city,$filter, $other.</p>");	
    }
    else if ($_POST['filter'] == "FILTER_SANITIZE_SPECIAL_CHARS") {
        $city = filter_var($_POST['city'], FILTER_SANITIZE_SPECIAL_CHARS);
        $filter = filter_var($_POST['filter'], FILTER_SANITIZE_SPECIAL_CHARS);
        $other = filter_var($_POST['other'], FILTER_SANITIZE_SPECIAL_CHARS);
        print("<p>SANITIZED (CONVERTED): $city,$filter, $other.</p>");	
    }

	$filterFile = fopen("filter-results.txt", "a");
	fputs($filterFile, $_POST['city'].":".$_POST['filter'].":".$_POST['other']."\n");
	fputs($filterFile, "$city:$filter:$other\n\n");
    fclose($filterFile);

?>
<p><a href="test-filter-var.html">Return to form</a></p>
	
</body>
</html>

