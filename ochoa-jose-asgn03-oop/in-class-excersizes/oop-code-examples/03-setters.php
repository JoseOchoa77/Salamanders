<?php

class Bird {
    // Class variables. Also called properties
    private $commonName;
    private $food;
    private $link;

    public function getCommonName() {
        return $this->commonName;
    }

    public function setCommonName($commonName) {
        // add some validation -- no numbers
        $this->commonName = $commonName;
    }

    public function getFood() {
        return $this->food;
    }

    public function setFood($food) {
        $this->food = $food;
    }

    public function getLink($link) {
        return $this->link;
    }

    public function setLink($link) {
        $this->link = $link;
    }

    public function aboutBird() {
        return "This bird is a(n) " . $this->commonName . "and it eats " . $this->food . " Learn more about the " . "<a href=\"{$this->link}\">$this->commonName.</a>";
    }    
}


$bird = new Bird;
// See how we no longer have access to the private property
// $bird->commonName = 'Eastern Bluebird';
// echo $bird->commonName;

// We need to access the private accessor through the setter and getter
// if you don't use the getter, the program still protects the variable

$bird->setCommonName('Carolina Wren');
echo $bird->getCommonName();
