<?php
 
  /* The above code is printing the maximum and minimum values of an integer and the size of an
  integer. */
  echo 'PHP_INT_MAX: '.PHP_INT_MAX."<br>";
  echo 'PHP_INT_MIN: '.PHP_INT_MIN."<br>";
  echo 'PHP_INT_SIZE: '.PHP_INT_SIZE."<br>";

  $x = 5985;
  /* Checking if the variable  is an integer. */
  $is_int = is_int($x); 
  var_dump($is_int);

    
  /* Printing the maximum and minimum values of a float and the size of a float. */
  echo 'PHP_FLOAT_MAX: '.PHP_FLOAT_MAX."<br>";
  echo 'PHP_FLOAT_MIN: '.PHP_FLOAT_MIN."<br>";
  echo 'PHP_FLOAT_DIG: '.PHP_FLOAT_DIG."<br>";
  

  $x = 10.456;

  /* Checking if the variable is a float. */
  var_dump(is_float($x));

  echo PHP_FLOAT_MAX."<br>";
  $x = 1.9e411;
  var_dump($x);
  

  /* Returning a `NAN` value. */
  $x = acos(8);
  var_dump($x);

  
  $x = 5985;
  /* Checking if the variable is a number. */
  var_dump(is_numeric($x));
  $x = "5985";

  var_dump(is_numeric($x));
  $x = "59.85"+100;
  var_dump(is_numeric($x));

  $x = "Hello";
  var_dump(is_numeric($x));

  
  $x = 23465.777;
  /* Casting the variable `` to an integer. */
  $int_cast = (int)$x;
  var_dump($int_cast);

  echo "<br>";

  $x = "23465.777";
  $int_cast = (int)$x;
  var_dump($int_cast);
  ?>