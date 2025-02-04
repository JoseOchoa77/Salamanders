<!DOCTYPE html>
<!--	Author: 	Mike O'Kane
		Date:		April 15, 2021
		File:		confirm-order.php
		Purpose: 	Demonstrate various form elements
-->

<html>
<head>
	<title>Pizza Order</title>
	<link rel ="stylesheet" type="text/css" href="pizza.css" >
	<style>
	h2 { color:red;}
	p  { padding-left:15px;padding-right:15px; color:green}
	</style>
</head>
<body>

<div style ="height:80px; background:green;">
<h1>PHP Express Pizza Delivery</h1>
</div>
    
<?php
    $timeOfOrder = $_POST["timeOfOrder"];
    $pizzaCost = $_POST["pizzaCost"];
    $toppingCost = $_POST["toppingCost"];
    $customerName = $_POST["custName"];
    $crust= $_POST["crust"];
    $instructions = $_POST["delivery"];
    
    print ("<h2>Hello ".$customerName."</h2>");
    print ("<p>You ordered a $crust crust pizza with ");
    
    if (isset($_POST["toppings"]))
    {
        $toppings = $_POST["toppings"];
        
        foreach ($toppings as $topping) {
            print ("$topping and ");
        }
        print ("hey that sounds truly delicious!</p>");
        
        if (isset($_POST["freeTopping"]))
            $totalToppingCost = (count($toppings)- 1) *$toppingCost;
        else
            $totalToppingCost = count($toppings) *$toppingCost;
    }
    else
    {
        print ("no toppings</p>");
        $totalToppingCost = 0;
    }
    
    $totalCost = $pizzaCost + $totalToppingCost;
    
    print ("<h2>Your total cost is <strong>$".number_format($totalCost, 2)."</strong></h2>");
    
    print ("<p>We received your order on ".$timeOfOrder.". It will arrive in 40 minutes or your next pizza is free!</p>");
    
    if (!empty($instructions))
        print ("<p>Your delivery instructions: <strong>".$instructions."</strong></p>");
    
    print ("<h2><a href=\"pizza-order.php\">Order another pizza?</a></h2>");
            
?>
<div style ="height:80px; background:red;">
<h1>123 Main Street 000-111-2222</h1>
</div>   
 
 
</body>
</html>

