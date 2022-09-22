<?php
  
/* Printing the numbers 1 to 100, each on a new line. */
  $y = 1;
  do {
    echo $y . ", ";
    $y++;
  } while ($y <= 100);
  echo "<p>otro ejemplo</p><br>";

/* Printing the numbers 0 to 100, each on a new line, but in increments of 10. */
  $z = 0;
  do {
    echo $z . ", ";
    $z += 10;
  } while ($z <= 100);
  ?>