<!DOCTYPE html>
      
<html>
    <head>
      <title>Wage Report</title>
      <link rel ="stylesheet" type="text/css" href="sample.css">
    </head>
    <body>
      <h1>index</h1>
      
        <?php
          include("functions/shopping-functions.php");
          $total = 0;
          $itemPrices = [10.00, 5.00, 15.00];
          $discount = 20;
          
          $total = calculateTotal($itemPrices, $discount);
          
          print("<p>Subtotal: $".number_format(calculateSubtotal($itemPrices),2)."<br>
                Discount Applied: $discount%<br>
                Final Total: $".number_format($total,2)."</p>");
        ?>
    </body>
  </html>
