<?php
// Calcular o fatorial de um número qualquer
//exemplo "Fatorial de 5= 5*4*3*2*1


// O fatorial de um número é a multiplicação desse número por todos os seus antecessores maiores que zero
$n = 4;
$n2 = 1;

while ($n >= 1){
    $n2 *= $n;
    $n--; 
}
   
echo "O fatorial do teu número é: {$n2} <br>";