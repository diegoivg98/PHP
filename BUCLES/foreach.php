<?php
/* Creating an array with the values 1, 2, 3, 4. */
  $array = [1, 2, 3, 4];
  var_dump($array);

 /* Multiplying each value in the array by 2. */
  foreach($array as &$valor){
    $valor = $valor*2;
  }
  var_dump($array);

  unset($valor);

  /* Printing the key and value of each element in the array. */
  foreach($array as $clave => $valor){
    echo "Clave: $clave - Valor: $valor<br>";
  }
  ?>