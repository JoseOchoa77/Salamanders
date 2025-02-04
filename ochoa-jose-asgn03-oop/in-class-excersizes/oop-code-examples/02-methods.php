<?php

class Bird {
    // Class variables. Also called properties
    public $commonName;
    public $food;
    public $link;
    
    /* ---------------------------------------------------------------------------------------
        Example of a class method (function)
        Note the use of $this
        $this refers to the property in "this" class.
        Without $this, the function would assume the variable is used for the function as a small, self-contained program.
        This ensures that class-level variables are not confused with a function-level varaible.
    --------------------------------------------------------------------------------------- */

    public function about_bird() {
        return "This bird is a(n) " . $this->commonName . " and it eats " . $this->food . " Learn more about the " . "<a href=\"{$this->link}\">$this->commonName.</a>";
    }    
}

$bird = new Bird;
$bird->commonName = "Carolina Wren";
$bird->food = "insects";
$bird->link = "https://www.allaboutbirds.org/guide/Carolina_Wren/";
echo $bird->about_bird();