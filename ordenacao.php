<?php
// Encontrar o maior valor em um conjunto de números em um array. 
// E exibir esse valor ao final para o usuário.
// Implementar a lógica para encontrar o 99;

// $numeros = [10, 80, 5, 14, 90, 29, 99, 1]; // 0 - 7 (8)

// $tamanho = count($numeros);
// $maior = 0;

// for($i=0; $i < $tamanho; $i++){
//     $posicaoAtual = $nums[$i];

//     if ($posicaoAtual > $maior) {
//         $maior = $posicaoAtual;
//     }
// }
// echo $maior;

/* 
2- Por meiod a tecnica de ordenação Bubble Sort, odene o array abaixo em ordem crescente. 
   (reduz a quantidade de repetições pq aproxima mais do teu resultado)
   Dica: utilize o laço de repetição FOR, pode ser necessário mais e um e tambem deve ser utilizadop um IF
*/

// $nums = [34, 12, 98, 45, 23, 67, 8];
// $tamanho = count($numeros);

// for($i=0; $i < $tamanho - 1; $i++){
//     for ($j = 0; $j < $tamanhoArray - $i - 1 ; $j++) {
//              if ($nums[$j] > $nums[$j +1]) {
//             $temp = $nums[$j];
//             $nums[$j] = $nums[$j +1];
//             $nums[$j + 1] = $temp;
//         }
//     }
// }

// class POO = objeto POO => Programação Orientada ao Objeto OOP
// for | While \ Foreach | implode

// implode transforma arary em string

// CONTAR valores duplicados de um array.
$frutas = [
    "maçã",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maçã",
    "maçã",
];
 // Saida esperada: 3maçã, 2banana, 1laranja, 1uva
// Dica: in_array(), array_merge(), isset(), array_push()

$newFrutas = [];
for($i = 0; $i < count($frutas); $i++) {
    $frutaAtual = $frutas[$i]; // maca

    if (!isset($newFrutas[$frutaAtual])) {
        $newFrutas[$frutaAtual] = 1; // [maca => 1]
    } else {
        $newFrutas[$frutaAtual] += 1; // [maca => 3]
    }
}

$fruits = $newFrutas;
function ordenacao($fruits, $ordem = "desc") {
    
    rsort($fruits);

    foreach ($fruits as $i => $v) {
        echo "$i = $v <br>";
    }
}

ordenacao($fruits, $ordem = "desc");


//  // Saída esperada: maçã, banana, laranja, uva
// $newFrutas = [];

// for ($i=0; $i < count($frutas); $i++){
//     if (!isset($newFrutas[$Frutas])){
//         $newFrutas[$frutas] = 1;
//     }
//     else {
//         $newFrutas[$frutas] += 1; 
//     }
// }

// echo implode (",", $newFrutas);

