<?php
include ("inc-head.php");
include("inc-error-messages.php");
include ("inc-company-info.php");
include ("inc-numeric-file-functions.php");

print ("<h1>SALES REPORT FOR ".$companyInfo['name']."</h1>");
$fileName = "sales-data.txt";
if (file_exists($fileName)) {
	$total = getTotal ($fileName);
	$count = getCount ($fileName);
	if ($count == 0)
			print ($errorMessage['emptyFile']);
	else {
		$avgSale = $total /$count;
		print ("<p>TOTAL SALES: $".number_format($total,2)."<br>");
		print ("AVERAGE (BY SALES PERSON): $".number_format($avgSale,2)."</p>");	
	}
}
else
	print ($errorMessage['fileNotFound']);

print ("<p>Email: ".$companyInfo['email']." Phone: ".$companyInfo['phone']."</p>");

include ("inc-foot.php");
?>
