<?php
  $a = 30;
  $b = 20;
  if($a > $b){
    echo "A es mayor que B<br>";
  }

  $a = 30;
  $b = 40;
  if($a > $b){
    
    echo "A es mayor que B<br>";
  }else{
    echo "A no es mayor que B<br>";
  }

  $a = 30;
  $b = 40;
  if($a > $b){
    echo "A es mayor que B<br>";
  }elseif ($a == $b){
    echo "A y B son iguales<br>";
  }else{
    echo "A es menor que B<br>";
  }
  ?>