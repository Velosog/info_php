<?php
/* Multiplicar um vetor $A por um vetor $B e salvar o produto dessa multiplicação em um novo vetor chamado  $Resultado 
 $a = [2,3,4,];
 $b = [5,6,7,];
 $resultado $a * $b;
 $resultado = [10, 18, 28];
 */

$A = [2,3,4,9,1,11];
$B = [5,6,7,10,5,9];
$C = [2,4,6,8,10,12];

for ($i = 0; $i < count($A); $i++ ) {
    $resultado = $A[$i] * $B[$i] * $C[$i]; 
    echo "Vetor $resultado <br> ";
}

