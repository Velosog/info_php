<?php

//Calcular os 10 primeiros números primos

$contPrimos = 0;
$número= 0;
$divisor = 0;
$arrayprimos = [];

while ($contPrimos <= 10){
    $resto = $número % $divisor; // % = resto da divisão
    if ($resto != 0){
        continue;
    }
    array_push($arrayprimos, $número);
}