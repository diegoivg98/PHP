<?php

/* Creating a new class called `Fruit`. */
class Fruit{
  /* Declaring the properties of the class. */
  public $name;
  public $color;
  public $weight;

  /**
   * It sets the name of the object to the value of the variable .
   * 
   * @param n The name of the person
   */
  function set_name($n){
    $this->name = $n;
  }

  /**
   * The function `set_color` takes one argument, ``, and sets the value of the `color` property to
   * the value of ``
   * 
   * @param n The color to set the text to.
   */
  protected function set_color($n){
    $this->color = $n;
  }

  /**
   * It sets the weight of the object.
   * 
   * @param n The weight of the node.
   */
  private function set_weight($n){
    $this->weight = $n;
  }
}

/* Creating a new object of the class `Fruit`. */
$mango = new Fruit();

/* Setting the name of the object to the value of the variable `name`. */
$mango->set_name("name");
