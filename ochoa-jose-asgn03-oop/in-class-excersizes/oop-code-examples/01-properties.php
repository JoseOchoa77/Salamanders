<?php

class Bird {

// class level properties
    public $commonName;
    public $food;
    public $link;
}

// Create a new instance of Bird
$bird = new Bird;

// Assign values to the properties
$bird->commonName = "Eastern Bluebird";
$bird->food = "insects";
$bird->link = "https://www.allaboutbirds.org/guide/Eastern_Bluebird/";

// Create a second instance of Bird
$wren = new Bird;
$wren->commonName = "Carolina Wren";
$wren->food = "insects";
$wren->link = "https://www.allaboutbirds.org/guide/Carolina_Wren/";

echo "<p>The {$bird->commonName}  eats {$bird->food}. You can read more about the <a href=\"{$bird->link}\">{$bird->commonName}</a></p>";
echo "<p>The {$wren->commonName} eats {$wren->food}. You can read more about the <a href=\"{$wren->link}\">{$wren->commonName}</a></p>";

