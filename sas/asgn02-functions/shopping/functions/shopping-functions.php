<?php
function calculateTotal($itemPrices, $discount){
  $subtotal = calculateSubtotal($itemPrices);
  $discountAmount = applyDiscount($subtotal, $discount);
  $total = $subtotal - $discountAmount;
  return ($total); 
  }

function calculateSubtotal($itemPrices){
  $subtotal = 0;
  for ($i=0;$i < sizeof($itemPrices); $i=$i+1){
    $subtotal = $subtotal + $itemPrices[$i];
  }
  return($subtotal);
}

function applyDiscount($subtotal, $discount){
  $discountPercentage = $discount * 0.01;
  $discountAmount = $subtotal * $discountPercentage;
  return($discountAmount);
}


