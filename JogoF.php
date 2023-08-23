<?php
// $dataAtual = date('Y-m-d'); // 2023-08-22
// $dataAtual = date('d/m/Y'); // 22/08/2023

// $dataAtual = date('Y-m-d H:i:s'); // 2023-08-22 20:50:00
// $dataAtual = date('d/m/Y H:i:s'); // 22/08/2023 20:51:00

$horaInicial = '23:00:00';
$horaFinal = '00:30:00';
$acrescimo = '03:00';
$acrescimo2 = '04:00';

$arrAcrescimo = explode(":",$acrescimo);
$minutosA = $arrAcrescimo[0];
$segundosA = $arrAcrescimo[1];

$minutosEmSegundosA = $minutosA * 60;

$totalAcrescimoEmSegundos = $minutosEmSegundosA + $segundosA;

$arrAcrescimo2 = explode(":",$acrescimo2);
$minutosA2 = $arrAcrescimo2[0];
$segundosA2 = $arrAcrescimo2[1];

$minutosEmSegundosA2 = $minutosA2 * 60;

$totalAcrescimoEmSegundos2 = $minutosEmSegundosA2 + $segundosA2;

$arrHora = explode(":",$horaInicial);
$hora = $arrHora[0];
$minutos = $arrHora[1];
$segundos = $arrHora[2];

$horaEmSegundos = $hora * 3600;
$minutosEmSegundos = $minutos * 60; 

$totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos;

$arrHoraFinal = explode(":",$horaFinal);
$horasFinais  = $arrHoraFinal[0];
$minutosFinais = $arrHoraFinal[1];
$segundosFinais = $arrHoraFinal[2];

$horaEmSegundosF = $horasFinais * 3600;
$minutosEmSegundosF = $minutosFinais * 60;

$totalInicialEmSegundosF = $horaEmSegundosF + $minutosEmSegundosF + $segundosFinais;

$Resultado = ($totalInicialEmSegundosF - $totalInicialEmSegundos + $totalAcrescimoEmSegundos + $totalAcrescimoEmSegundos2) /60;

echo "O tempo de jogo foi de {$Resultado} minutos <br>";