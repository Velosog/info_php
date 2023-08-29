<?php

$Número = 16;
$Número1 = 10;

// $Divisor <= $Número || $Número1;

$Divisor = 2; 
while ($Divisor <= $Número) {
    $Resultado = $Número % $Divisor; // 0
    $Resultado2 = $Número1 % $Divisor; // 1
    $Divisor++; 
}

$Divisores= $Divisor * $Divisor;

echo "O resultado do seu MMC é de: {$Divisores} <br>";
