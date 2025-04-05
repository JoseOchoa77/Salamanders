<!DOCTYPE html>
      
<html>
    <head>
      <title>Wage Report</title>
      <link rel ="stylesheet" type="text/css" href="sample.css">
    </head>
    <body>
      <h1>index</h1>
      
        <?php
          include("functions/musical-instruments-functions.php");
          $instruments = [ 
            ["instrument" => "Piano","price" => 2000], 
            ["instrument" => "Guitar", "price" => 500],
           ["instrument" => "Flute", "price" => 200]
          ];

          $discountedPrice = applyDiscount($instruments, 10);

          applyDiscountByReference($instruments, 10);

          echo "Prices after applying discount (Pass by Value):\n";
          print_r($discountedPrice);

          echo("<br><br>");
          
          echo "\nPrices after applying discount (Pass by Reference):\n";
          print_r($instruments);

        ?>
    </body>
  </html>
