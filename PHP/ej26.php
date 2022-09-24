<?php

 /**
  * It adds two numbers together.
  * 
  * @param num1 The first number to add.
  * @param num2 The second number to add.
  * 
  * @return The sum of the two numbers.
  */
  function suma($num1, $num2){
    return $num1 + $num2;
  }

  $a = 1;
  $b = 99;
  echo "la suma de $a + $b es igual a: ".suma($a, $b)."<br>";

  

/**
 * It takes a string and appends "-Modificado" to it
 * 
 * @param cadena The string to be modified.
 */
  function modificar_cadena(&$cadena){
    $cadena .= "-Modificado";
  }
  $texto = "texto inicial";
  echo $texto."<br>";
  modificar_cadena($texto);
  echo $texto."<br>";
  

 /**
  * It prints out the string "No tenemos  para comer<br>"
  * 
  * @param comida This is the name of the parameter.
  */
  function mostrar_comida($comida ="pollo"){
    echo "No tenemos $comida para comer<br>";
  }

  mostrar_comida();
  mostrar_comida("lentejas");


 /**
  * It takes two numbers, adds them together, and returns the result
  * 
  * @param a 1
  * @param b 2
  * 
  * @return 3
  */
  function suma2($a = 1, $b = 2){
    return $a + $b;
  }

  $suma2 = suma2(30, 40);
  echo $suma2."<br>";

  
  $function1 = "suma2";
  echo $function1();
  $function2 = "mostrar_comida";
  echo $function2();

  
  ?>