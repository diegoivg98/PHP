<?php

/* A trait. */
trait message1{
  public function msg1(){
    echo "OPP es divertido!";
  }
}

/* The class Bienvenido uses the trait message1. */
class Bienvenido{
  use message1;
}

/* Creating a new object of the class Bienvenido. */
$ob = new Bienvenido();

/* Calling the method msg1() from the trait message1. */
$ob->msg1();