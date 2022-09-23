<?php
  
  $txt = "Hellow World";
  echo "La cadena para trabajar es: '$txt'<br>";
  /* Counting the number of characters in the string. */
  $str_len = strlen($txt);
  echo 'strlen(): ' . $str_len . "<br>";

  
  /* Counting the number of words in the string. */
  $str_word_count = str_word_count($txt);
  echo 'str_word_count(): ' . $str_word_count . "<br>";
  
  /* Reversing the string. */
  $str_rev = strrev($txt);
  echo 'strrev(): ' . $str_rev . "<br>";

  
 /* Finding the position of the word "World" in the string. */
  $str_pos = strpos($txt, "World");
  echo 'strpos(): ' . $str_pos . "<br>";

  
/* Replacing the word "World" with the word "Country" in the string . */
  $str_replace = str_replace("World", "Country", $txt);
  echo 'str_replace(): ' . $str_replace . "<br>";
  ?>