<?php
/* Creating a variable called  and assigning it the value of the current date in the format of
day/month/year. */
  $today = date("d/m/Y");
  var_dump($today);

/* Printing the current date in the format of year-month-day. */
  var_dump(date("Y-m-d"));

/* Printing the current year. */
  var_dump(date("Y"));

/* Printing the current day of the week. */
  var_dump(date("l"));
  ?>

  <?php
    /* Printing the current time in the format of hour:minute:second. */
    echo "La hora es: ".date("h:i:s")."<br>";
    
    /* Setting the timezone to Madrid. */
    date_default_timezone_set("Europe/Madrid");

    /* Printing the current time in the format of hour:minute:second. */
    echo "La hora es ". date("h:i:sa")."<br>";

    /* Setting the timezone to New York. */
    date_default_timezone_set("America/New_York");
    echo "La hora es ". date("h:i:sa")."<br>";

   /* Creating a date and time. */
    $d = mktime(11,14,54,8,12,2021);
    echo "La fecha de creación es ".date("Y-m-d h:i:sa", $d)."<br>";

    /* Creating a date and time. */
    $d = strtotime("10:30pm 15 April 2026");
    echo "La fecha de creación es ". date("Y-m-d h:i:sa", $d)."<br>";
  ?>