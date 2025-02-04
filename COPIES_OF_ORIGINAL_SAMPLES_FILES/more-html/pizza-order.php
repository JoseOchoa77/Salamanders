<!DOCTYPE html>
<!--	Author: 	Mike O'Kane
		Date:		April 15, 2021
		File:		pizza-order.php
		Purpose: 	HTML Example - introducing HTML tables
-->

<html>
<head>
	<title>Pizza Order</title>
	<link rel ="stylesheet" type="text/css" href="pizza.css" >
</head>
<body>
    <div style ="height:80px; background:green;">
	<h1>PHP Express Pizza Delivery</h1>
	</div>
	
	<form action= "confirm-order.php" method = "post">
	
	<?php
        $time = date("l")." at ".date("g:ia");
        print ("<input type=\"hidden\" name=\"timeOfOrder\" value=\"$time\">");
    ?>

    <input class="hidden" type="hidden" name="pizzaCost" value="12.75">
    <input class="hidden" type="hidden" name="toppingCost" value="2.50">

    <label>Your first name:
        <input type="text" name="custName" size = "10"></label>
    <hr>
    <label>Crispy Thin Crust?<input type="radio" name="crust" value="thin"></label>
    <label>Or Chewy Thick Crust? <input type="radio" name="crust" value="thick"></label>
    <label>Or Yummy Stuffed Crust? <input type="radio" name="crust" value="stuffed"></label>
    <hr>
    <label>Extra Cheese?
        <input type="checkbox" name="toppings[]" value="cheese"></label>
    <label> Green Peppers?
        <input type="checkbox" name="toppings[]" value="pepper"></label>
    <label>Mushrooms?
        <input type="checkbox" name="toppings[]" value="mushroom"></label>
    <label>Onions?
        <input type="checkbox" name="toppings[]" value="onion"></label>
    <label>Olives?
        <input type="checkbox" name="toppings[]" value="olives"></label>
    <hr>
    <label>Do you have a coupon for a free topping?
        <input type="checkbox" name="freeTopping"></label>
    <hr>
    <label>Special delivery instructions?<textarea name="delivery" rows="2" cols="38" maxlength = "80"></textarea></label>

        
    <input type="submit" class="submit" value="Order your Pizza!" />
    
    </form>
    
    <div style ="height:80px; background:red;">
	<h1>123 Main Street 000-111-2222</h1>
	</div>
        

</body>
</html>

