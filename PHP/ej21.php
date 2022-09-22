<?php
  
  /* Printing all numbers from 1 to 100 except for multiples of 5. */
  for($i = 1; $i <= 100; $i++){
    if($i % 5 == 0){
      continue;
    }
    echo $i. ", ";
  }

  ?>