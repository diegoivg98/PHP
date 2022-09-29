<?php
  /**
   * It divides two numbers and throws an exception if the divisor is zero.
   * 
   * @param dividendo The number to be divided.
   * @param divisor The number to divide by.
   * 
   * @return The result of the division.
   */
  function dividir($dividendo, $divisor){
    if ($divisor == 0) {
      throw new Exception("División por cero");
    }
    return $dividendo / $divisor;
  }
  echo dividir(1, 2);
?>

  <?php
  /* Catching the exception and printing a message. */
  try {
    echo dividir(1, 0)."<br>";
  } catch (Exception $e) {
    echo "<br>deshabilitado método divide";
  } finally  {
    echo "<br>proceso completado";
  }
  ?>