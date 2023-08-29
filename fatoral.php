<?php
// Calcular o fatorial de um número qualquer
//exemplo "Fatorial de 5= 5*4*3*2*1


// O fatorial de um número é a multiplicação desse número por todos os seus antecessores maiores que zero
$n = 5;
$n2 = 1;

//$n = $n* ($n -1) * ($n -2);
   
for ($n = 5; $n > 0; $n--){
    if ($n > 0){
        echo $n * ($n - 1);
    } else echo "$n";

    echo "$n! = $n * ($n - $n2) <br>";
}

echo "O fatorial do teu número é: {$n} <br>";