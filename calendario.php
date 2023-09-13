<?php

/*
 Implementar a lógica de um calendário, 
 considerando os dias válidos para cada
 mês e os anos bissextos. Caso for informada uma data inválida, 
 corrigir para próxima data válida, ex: 31/04/1990 => 1/05/1990;
 E quando for ano bissexto, informar que é ano bissexto.]
 */

 $dataStr = "29/05/2020;";
 $data = explode ("/", $dataStr);
 $dia = (int) $data[0];
 $mês = (int) $data[1];
 $ano = (int) $data[2]; // '1990' => 1990


if ($dia < 1 || $dia > 31){
    $dia = 1;
}

if ($mes < 1 || $mes > 12){
    $mes = 1;
}

if (in_array($mes, $meses30dias) && $dia >30 ) {
    $dia = 1;
    $mes += 1;
}
 
if (in_array($mes, $meses31dias) && $dia >30 ) {
    $dia = 30;
    $mes -= 1;
}
 
if (in_array($mes, $meses31dias) && $dia >31 ) {
    $dia = 1;
    $mes += 1;
}

if (in_array($mes, $meses30dias) && $dia >30 ) {
    $dia = 31;
    $mes -= 1;
}

 $dataStr = "{$dia}/{$mes}/{$ano}";

if (($ano % 4 == 0) && ($ano % 100 != 0 || $ano %400 == 0)) {
    echo "$dataStr é bissexto";
}
else{
    echo "$dataStr não é bissexto";
}

if ($mes == 2 && $dia >= 28){
    $dia = 28;

    if (isBissexto($ano)){
        $dia 29;
    }
}

    function 
     if (($ano % 4 == 0) && ($ano % 100 != 0 || $ano %400 == 0)){
        return true
    } 
    else {
        return false
    }



