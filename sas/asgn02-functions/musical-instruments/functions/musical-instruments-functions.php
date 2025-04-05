<?php

function applyDiscount($price, $discount) {
  $discount = $discount * 0.01;
  foreach($price as &$instruments){
  $discountedPrice = calculateDiscountedPrice($instruments, $discount);
  $instruments["price"] = $discountedPrice;
  }
  return($price);
}

function applyDiscountByReference(&$price, $discount) {
  $discount = $discount * 0.01;
  foreach($price as &$instruments){
    $discountedPrice = calculateDiscountedPrice($instruments, $discount);
    $instruments["price"] = $discountedPrice;
    }
  }

function calculateDiscountedPrice($price, $discount) {
  $deduction = $price["price"] * $discount;
  $discountedPrice = $price["price"] - $deduction;
  return($discountedPrice);
}
