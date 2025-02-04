<!DOCTYPE html>
<!--Author:
	Date:
	File:	  orders.php
	Purpose:
	
-->

<html>
<head>
	<title>BLUEBERRY ORDERS</title>
	<link rel ="stylesheet" type="text/css" href="sample.css">
</head>
<body>

	<?php
		
		print ("<h1>BLUEBERRY ORDERS</h1>");
		print ("<table>");
		print ("<tr><th>Order #</th><th>Quantity</th></tr>");

    $blueberryOrders = array(2,17,4,6,1,3,1,15,1,6);
		$orderNumber = 0;
    $totalBushes = 0;

    for($i=0; $i < sizeof($blueberryOrders); $i=$i+1) 
      {
        $orderNumber = $orderNumber + 1;
        print("<tr><td>$orderNumber</td><td>$blueberryOrders[$i]</td></tr>");

        $totalBushes = $totalBushes + $blueberryOrders[$i];
      }
		print ("</table>");
    
		print ("<p>TOTAL NUMBER OF BUSHES ORDERED: $totalBushes.</p>");
		print ("<p>TOTAL NUMBER OF ORDERS: ".sizeof($blueberryOrders).".</p>");		
	?>
</body>
</html>
