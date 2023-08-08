<?php
 $Value = "10";
 $Value2 = "16";
 $Operador = "ma";
 $Resultado = 0;
 $NúmeroAlto = 40;

  if ($Operador == "+") {
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

  if ($Resultado >= $NúmeroAlto) {
    echo "É um número alto <br> ";
  }
  else {
    echo "Não é um número alto <br>"; //"Não é um número alto
  }

  if ($Operador == "**") {
     $Resultado = $Value ** $Value2;
  }

  if ($Operador == "%") {
    $resto = $Value % $Value2;
    if ($resto == 0) {
      echo $Resultado == "O número é par";  
    }  else {
      echo $Resultado == "O número é impar";
    }
  }
 
  if ($Resultado >= 1) {
    $Resultado = "O número é positivo <br>";
  } else if ($Resultado <= -1) {
    $Resultado = "O número é negativo";
  } else "O número é nulo"; 
 
  if ($Operador == "perc") {
    $Resultado = $Value - ($Value * $Value2) / 100; 
  }
 
  if ($Operador == "perc+") {
    $Resultado = $Value + ($Value * $Value2) / 100; 
  }

  if ($Operador == "perc*") {
    $Resultado = $Value * ($Value * $Value2) / 100; 
  }

  if ($Operador == "perc/") {
    $Resultado = $Value / ($Value * $Value2) / 100; 
  }

  if ($Operador == "sqrt") {
    $Resultado = sqrt($Value); 
  }

  if ($Operador == "+sqrt") {
    $Resultado = sqrt($Value) + sqrt($Value2);
  }

  if ($Operador == "-sqrt") {
    $Resultado = sqrt($Value) - sqrt($Value2);
  }
 
  if ($Operador == "/sqrt") {
    $Resultado = sqrt($Value) / sqrt($Value2);
  }

  if ($Operador == "*sqrt") {
    $Resultado = sqrt($Value) * sqrt($Value2);
  }

  if ($Operador == "ma") {
    $Resultado = ($Value + $Value2) / 2;
  }

  echo "O valor é {$Resultado} <br>";

  $c= 5;

  while ($c >= 0)
  {
    echo "A bomba irá explodir em $c <br>";
    $c--;
  }
   echo "BOOM";

   echo " \u{1F4A5} \u{2620} <br>";

  $a= 0;

  for ($a = 0; $a < 100; $a++)
  { 
   echo "O tempo é: {$a} <br>";
   $a++;
   $a++;
   $a++;
   $a++;
  }
 
  $c= 3;
  $i = 0;
  while ($i <= 30)
  {
      $resultado = $c * $i;
      echo "O número {$c} multiplicado por {$i} resulta em: {$resultado} <br>";
      $i++; 
  }
  
