<?php
/* Defining an interface. */
interface Animal{
  public function haceSonido();
}

/* Implementing the interface Animal. */
class Gato implements Animal
{
  
 /**
  * The function `haceSonido()` prints "Miauuuu" to the screen
  */
  public function haceSonido(){
    echo "Miauuuu";
  }
}

/* Creating a new instance of the class Gato. */
$animal = new Gato();
/* Calling the function `haceSonido()` from the class `Gato`. */
$animal->haceSonido();
?>