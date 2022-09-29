<?php
 /**
  * It divides two numbers and throws an exception if the divisor is zero
  * 
  * @param dividendo The number to be divided.
  * @param divisor The number to divide by.
  * 
  * @return The result of the division.
  */
  function dividir2($dividendo, $divisor){
    if ($divisor == 0) {
      throw new Exception("División por cero", 1);
    }
    return $dividendo / $divisor;
  }

  /* Calling the function `dividir2` and passing the parameters 1 and 0. */
  try {
    echo dividir2(1, 0)."<br>";
  } 
  /* Catching the exception and printing the error message. */
  catch (Exception $e) {
    echo "<br>deshabilitado método divide<br>";
    /* Getting the error code, message, file and line where the error was thrown. */
    $code = $e->getCode();
    $message = $e->getMessage();
    $file = $e->getFile();
    $line = $e->getLine();
    echo "<b>Exception throw en archivo $file, línea $line: [Code $code] $message<b><br>";
  } finally  {
    echo "<br>proceso completado";
  }
  ?>