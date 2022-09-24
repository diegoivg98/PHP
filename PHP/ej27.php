<?php
  class Coche{

    /* Defining the properties of the class. */
    public $marca;
    protected $velocidad_maxima;
    private $seguridad_ncap;

    /**
     * A constructor function.
     * 
     * @param marca Brand of the car
     * @param velocidad_maxima The maximum speed of the car.
     * @param seguridad_ncap The safety rating of the car.
     */
    function __construct($marca, $velocidad_maxima, $seguridad_ncap){
      $this->marca = $marca;
      $this->velocidad_maxima = $velocidad_maxima;
    }

    /**
     * The __destruct() function is called when the object is destroyed
     */
    function __destruct(){
      echo "El coche está roto";
    }

    /**
     * The function getMarca() returns the value of the variable .
     * 
     * @return The value of the property .
     */
    function getMarca(){
      return $this->marca;
    }

   /**
    * It sets the marca variable to the value of the marca variable.
    * 
    * @param marca brand
    */
    function setMarca ($marca){
      $this->marca = $marca;
    }
  }

  
/* Creating a new object of the class Coche. */
  $auto = new Coche("Renault", 50, 2);

/* Setting the value of the property marca to the value of the variable marca. */
  $auto->setMarca("Fiat");
  $auto->marca = "Renault";

/* Setting the value of the property seguridad_ncap to the value of the variable seguridad_ncap. */
  $auto->seguridad_ncap = 3;

/* Showing the value of the property seguridad_ncap. */
  var_dump($auto->seguridad_ncap);

/* Showing the value of the property marca. */
  var_dump($auto->getMarca());
  ?>