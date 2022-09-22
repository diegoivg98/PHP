<?php

/* Printing all the numbers from 7 to 100 that are not divisible by 6. */
  for ($i = 7; $i <= 100; $i++) {    
    if ($i % 6 == 0) {
      break;
    }
    echo $i . ", ";
  }

  ?>