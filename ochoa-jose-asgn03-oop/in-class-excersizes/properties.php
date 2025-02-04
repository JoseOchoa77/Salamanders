<?php

class Dog {

    public $commonName;
    public $food;
    public $link;
    public $activity;


    //exercise 2
    public function about_dog() {
      return "This dog is a(n) ".$this->commonName ." and it enjoys ".$this->activity.". Learn more about the ".$this->link." ".$this->commonName .". ";
    }

    //exercise 3
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
      return "This dog is a(n) " . $this->commonName . "and it eats " . $this->food . " Learn more about the " . "<a href=\"{$this->link}\">$this->commonName.</a>";
  }
}

class animal {
  private $limbs;
  private $ears;
  private $movement = "can run";

  public function getLimbs() {
    return $this->limbs;
  }

  public function getEars() {
    return $this->ears;
  }

  public function getMovement() {
    return $this->movement;
}

public function setMovement($movement) {
    $this->movement = $movement;
}
}

class NoRun extends animal {
  //public $movement = "can't fly";
  private $movement = "can't run";
  
  public function getMovement() {
      return $this->movement;
  }

  public function setMovement($movement) {
      $this->movement = $movement;
  }
   
}


//exercise 1
$dog = new Dog;
$dog -> commonName = "German Shepard";
$dog -> food = "kibble";
$dog -> link = "www.dog.com";

print("<p>The {$dog->commonName} eats {$dog->food}. You can read about them more at {$dog->link}.</p>");


//exercise 2
$pitbull = new Dog;
$pitbull->commonName = "Pitbull";
$pitbull->activity = "running";
$pitbull->link = "www.pitbulls.com";
echo $pitbull->about_dog();
echo "<br><br>";

//exercise 3
$dingo = new Dog;
$dingo->setCommonName('dingo');
echo $dingo->getCommonName();

//exercise 4 
$terrier = new NoRun('Terrier', 'run'); 
echo "The " . $dog->getCommonName() . " " . $animal->getMovement() . " and it likes to eat " . $dog->getFood() . ". ";
