<?php 

class dog {
    // Class variables. Also called properties
    private $commonName;
    private $activity;
    private $link;

    // Example of a constructor

    public function __construct($commonName, $activity) {
       // similar to using a setter function
        $this->commonName = $commonName;        
        $this->activity = $activity;
    }

    public function getCommonName() {
        return $this->commonName;
    }

    public function getActivity() {
        return $this->activity;
    }
}

$dog = new dog("Yorkshire", "barking");
echo "We created a new dog, the " . $dog->getCommonName() . " using a construct. Oh yeah, it likes " . $dog->getActivity() . ".";
