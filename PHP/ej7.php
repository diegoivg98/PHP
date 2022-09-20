<?php
/* Creating an associative array. */
    $array_a = array("foo" => "bar", "bar" => "foo");

/* Printing the array. */
    var_dump($array_a);

   /* Creating an associative array. */
    $array_a = [
      "foo" => "bar", 
      "bar" => "foo"
    ];
    var_dump($array_a);

    
   /* Creating an associative array. */
    $array = [
      "foo" => "bar", 
      "bar" => "foo",
      100 => -100,
      -100 => 100
    ];
    var_dump($array);
    

    /* Creating an associative array with two keys, `frutas` and `numeros`. The `frutas` key has an
    array as its value, and the `numeros` key has an array as its value. */
    $frutas = [
      "frutas" => [
        "a" => "naranja",
        "b" => "platano",
      ],
      "numeros" => [1,2,3]
    ];
    var_dump($frutas);
  ?>