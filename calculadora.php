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
    // echo "É um número alto <br> "; 
  }
  else {
    // echo "Não é um número alto <br>"; //"Não é um número alto 
  }

  if ($Operador == "**") {
     $Resultado = $Value ** $Value2;
  }

  if ($Operador == "%") {
    $resto = $Value % $Value2;
    if ($resto == 0) {
      // echo $Resultado == "O número é par";  
    }  else {
      // echo $Resultado == "O número é impar"; 
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

  // echo "O valor é {$Resultado} <br>";

  $c= 5;

  while ($c >= 0)
  {
    // echo "A bomba irá explodir em $c <br>"; 
    $c--;
  }
  //  echo "BOOM"; 

  //  echo " \u{1F4A5} \u{2620} <br>"; 

  $a= 0;

  for ($a = 0; $a < 100; $a++)
  { 
  //  echo "O tempo é: {$a} <br>"; 
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
      // echo "O número {$c} multiplicado por {$i} resulta em: {$resultado} <br>"; 
      $i++; 
  }
  

  // Média Ponderada
   
   $Peso= 2;
   $Peso2= 2;
   $Peso3= 2;
   $Peso4= 2;
   $Peso5= 2;

   $Nota= 1.5;
   $Nota2= 1.3;
   $Nota3= 2;
   $Nota4= 1.4;
   $Nota5= 1.9;

   $numerador = ( ($Nota * $Peso) + ($Nota2 * $Peso2) + ($Nota3 * $Peso3) + ($Nota4 * $Peso4) + ($Nota5 * $Peso5) );
   $denominador = ( ($Peso + $Peso2 + $Peso3 + $Peso4 + $Peso5) );
   $MP = $numerador / $denominador;

   if ($MP >= 1.4){
    // echo "O aluno Foi Aprovado, pois sua média foi: {$MP} <br>";
   }
    else {
    //  echo "O aluno foi Reprovado, pois sua média foi: {$MP} <br>";
    }

// Média harmônica
 
    $Numerador= 5;

    $Denominador= 1/2;
    $Denominador1= 1/3;
    $Denominador2= 1/5;
    $Denominador3= 1/6;
    $Denominador4= 1/9;

    $totalDenominador= (($Denominador + $Denominador1 + $Denominador2 + $Denominador3 + $Denominador4) );
    $divisão= $Numerador / $totalDenominador;

    echo "A sua Média Harmônica é: {$divisão} <br>";

  // Para quem for usar o código, alterar o valor da divisão dos "Denominadores" e o valor da variável "Numerador"



  