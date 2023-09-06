<?php
// método e função são as mesmas coisas
// ctrl + espaço aparece uma aba das sujestões

//soma(10, 20); //chamando função | call

// a baixo temos a declaração da função
//function soma($valor1, $valor2){
//  echo ($valor1 + $valor2) . "<br>"; //lógica da função;
//}

//soma(50, 30); // chamando a função declarada logo a cima

//const NUMERO
//var numero
//camel case numeroPrimo
//snake case nmumero_primo
//factory, função com mais de uma função


function soma($valor1, $valor2){
    return $valor1 + $valor2;
   }

   function subtracao($valor1, $valor2){

      return $valor1 - $valor2;
   }
  

   function multiplicacao($valor1, $valor2){

      return $valor1 * $valor2;
   }
   

   function divisao($valor1, $valor2){

      return $valor1 / $valor2;
   }


   function pot($valor1, $valor2){
     
      return pow($valor1, $valor2);
    }

    function pot($valor1, $valor2){
     
        return pow($valor1, $valor2);
      }
      
   function exibirResultado ($resultado){

    echo $resultado . "<br>";
   }
  

   function calcular($operador, $valor1, $valor2){
    if ($operador == '+'){
      return soma ($valor1, $valor2);
    }
    if ($operador == '-'){
      return subtracao ($valor1, $valor2);
    }
    if ($operador == '*'){
      return multiplicacao ($valor1, $valor2);
    }
    if ($operador == '/'){
      return divisao ($valor1, $valor2);
    }
    if ($operador == '^'){
      return pot ($valor1, $valor2);
    }
    if ($operador == "!!"){
      return numPar ($valor1);
    }
}
  
  $operador= "11";
  $valor1 = 10;
  $valor2 = 2;
  
  $resultado = calcular($operador, $valor1, $valor2);
  exibirResultado ($resultado);
  
  
