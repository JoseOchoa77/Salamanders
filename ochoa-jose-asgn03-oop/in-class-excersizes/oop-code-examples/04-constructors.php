<?php 

class Bird {
    // Class variables. Also called properties
    private $commonName;
    private $food;
    private $link;

    // Example of a constructor

    public function __construct($commonName, $food) {
       // similar to using a setter function
        $this->commonName = $commonName;        
        $this->food = $food;
    }

    public function getCommonName() {
        return $this->commonName;
    }

    public function getFood() {
        return $this->food;
    }
}

$bird = new Bird("Carolina Wren", "insects");
echo "We created a new bird, the " . $bird->getCommonName() . " using a construct. Oh yeah, it likes to eat " . $bird->getFood() . ".";
