<?php
    /* Checking if the variable  is empty or not. If it is empty it will echo anonymous, if not it
    will echo logged in. */
    $user = "john Doe";
    echo $status = (empty($user))? "anonymous": "logged us"; 
    echo "<br>";
  ?>