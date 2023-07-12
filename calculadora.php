<?php

 $Value = "10";
 $Value2 = "30";
 $Operador = "-";
 $Resultado = 0;
 $NúmeroAlto = 40;

  if ($Operador == "+" ) {
    $Resultado = $Value + $Value2;
  }
// O valor é 40

  if ($Operador == "-") {
    $Resultado = $Value - $Value2;
  }
// O valor é -20

  if ($Operador == "/") {
    $Resultado = $Value / $Value2;
  }
// O valor é 0.33333

  if ($Operador == "*") {
    $Resultado = $Value * $Value2;
  }
// O valor é 300
  if ($Resultado >= $NúmeroAlto ) {
    echo "É um número alto <br> ";
  }
  else {
    echo "Não é um número alto <br>";
  }

  echo $Resultado;
