<?php
/* Creating an array with 5 elements. */
    $data = [1, 1.4, NULL, new stdClass, "bar"];

    /* Looping through the array and printing the type of each element. */
    foreach($data as $value){
      echo gettype($value)."<br>";
    }
  ?>