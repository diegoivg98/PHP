<?php
  class Coche{
 
    /* Declaring a public variable. */
    public $marca;
    /* declaring a property called "valocidad_maxima" */
    protected $valocidad_maxima;

   /**
    * A constructor function. It is used to initialize the object.
    * 
    * @param marca The brand of the car.
    * @param velocidad_maxima The maximum speed of the car.
    */
    function __construct($marca, $velocidad_maxima){
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }

    /**
     * ArrancaMotor() is a function that prints "BRUM..!!!" to the screen.
     */
    function arrancaMotor(){
      echo "BRUM..!!!<br>";
    }
  }

  /* It extends the Coche class and adds a new method called rompeMotor. */
  class CocheF1 extends Coche{
   /**
    * The function `rompeMotor()` is a public function that prints a message to the screen.
    */
    public function rompeMotor(){
      echo "el motor del ".$this->marca." esta roto, 
        y dice adios al llegar  los ".$this->velocidad_maxima."Km/h<br>";
    }
  }

/* Creating a new object of the class CocheF1. */
  $auto = new CocheF1("McClaren", 90);

/* Calling the function `arrancaMotor()` from the class `CocheF1`. */
  $auto->arrancaMotor();

/* Calling the function `rompeMotor()` from the class `CocheF1`. */
  $auto->rompeMotor();
  ?>