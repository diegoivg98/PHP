<?php

/* The class Car is an abstract class that has a public property called name and a public method called
intro. The class Car also has a constructor that takes a parameter called name. The constructor sets
the value of the name property to the value of the name parameter. The intro method is an abstract
method that returns a string */
abstract class Car {
  public $name;
  public function __construct($name){
    $this->name = $name;
  }
  abstract public function intro(): string;
}

/* The Seat class extends the Car class and overrides the intro() method. */
class Seat extends Car{
  public function intro(): string{
    return "Elige calidad española! Yo soy un $this->name!";
  }
}

class Audi extends Car{
  public function intro(): string{
    return "Elige calidad alemana! Yo soy un $this->name!";
  }
}

class Volvo extends Car{
  public function intro(): string{
    return "Elige calidad sueca! Yo soy un $this->name!";
  }
}

/* Creating a new instance of the Audi,Seat,Volvo class and calling the intro method on it. */
$audi = new Audi("Audi");
echo $audi->intro();
echo "<br>";

$seat = new Seat("Seat");
echo $seat->intro();
echo "<br>";

$volvo = new Volvo("Volvo");
echo $volvo->intro();
echo "<br>";
?>