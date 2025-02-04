<?php
/* ------------------------------------------------------------------
Added movement setters and getters in the parent class
------------------------------------------------------------------ */

class Bird {
    // Class variables. Also called properties
    private $commonName;
    private $food;
    private $link;
    private $movement="can fly";

    public function __construct($commonName, $food) {
        $this->commonName = $commonName;        
        $this->food = $food;
    }

    public function getCommonName() {
        return $this->commonName;
    }

    public function getFood() {
        return $this->food;
    }
    
    public function getMovement() {
        return $this->movement;
    }

    public function setMovement($movement) {
        $this->movement = $movement;
    }
}

class NoFly extends Bird {
    //public $movement = "can't fly";
    private $movement = "can't fly";
    
    public function getMovement() {
        return $this->movement;
    }

    public function setMovement($movement) {
        $this->movement = $movement;
    }
     
}

$bird = new NoFly('Cassowary', 'fruit'); 
echo "The " . $bird->getCommonName() . " " . $bird->getMovement() . " and it likes to eat " . $bird->getFood() . ". ";

$bird2 = new Bird("Carolina Wren", "insects");
echo "The " . $bird2->getCommonName() . " " . $bird2->getMovement() . " and it likes to eat " . $bird2->getFood() . ". ";