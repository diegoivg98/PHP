<?php
    /* Returning the value of pi */
    echo "pi es igual a: ".pi()."<br>";

    
    /* Finding the minimum and maximum values of the numbers in the parenthesis */
    $min = min(3,6,8,90,-200);
    $max = max(3,6,8,90,-200);
    echo "min es: $min, y max es $max<br>";

    /* Returning the absolute value */
    $a = -89.3;
    echo "el valor abosluto de $a es igual a : ".abs($a)."<br>";
    
    /* Rounding the number to the nearest integer. */
    echo "el valor redondeado de $a es igual a: ".round($a)."<br>";
    
    /* Returning a random number */
    echo "un número aleatorio es: ".rand()."<br>";
    /* Returning a random number between 20 and 50. */
    echo "un número aleatorio es entre 20 y 50: ".rand(20, 50);
  ?>