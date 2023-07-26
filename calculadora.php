<?php
 $Value = "2";
 $Value2 = "4";
 $Operador = "%";
 $Resultado = 0;
 $NúmeroAlto = 40;

  if ($Operador == "+" ) {
    $Resultado = $Value + $Value2;
  }

  if ($Operador == "-") {
    $Resultado = $Value - $Value2;
  }

  if ($Operador == "/") {
    $Resultado = $Value / $Value2;
  }

  if ($Operador == "*") {
    $Resultado = $Value * $Value2;
  }

  if ($Resultado >= $NúmeroAlto ) {
    echo "É um número alto <br> ";
  }
  else {
    echo "Não é um número alto <br>";
  }

  if ($Operador == "**") {
     $Resultado = $Value ** $Value2;
  }

  if ($Operador == "%") {
    $resto = $Value % $Value2;
    if ($resto == 0){
      $Resultado = "O número é par";  
    }  else {
      $Resultado = "O número é par";
    }
  }
 
  echo "O valor é {$Resultado}";
 
