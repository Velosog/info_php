<?php

/*
Criar um objeto (classe) pessoa, que comptemple os dois tipos de pessoa (jurídica e física)
CNPJ e CPF, separando suas características/ indvidualidades conforme o tipo 

1- pessoa física: CPF, Pais, Amigos, Data de Nascimento,
2- pessoa jurídica: CNPJ, Sócios, Funcionários, Data de Fundação,
3- Idem: endereço, nome, */

$pernas = " ";
$pes = " ";
$boca = " ";
$voz = " ";
$nome =  "Gabriel Pessali Veloso";
$cpf = "123456789-10";
$cnpj = "12045607891023";
$pais = "Sílvia e Paulo";
$socios = "Gabriel e Bernardo";
$amigos = "Bernardo Z, Bernardo L, Arthur, João, Mateus";
$funcionarios = "Gabriel, João, Karine, Júlia, Giuliana, Érika";
$dataDeNascimento = "18/07/2007";
$dataDeFundação = "19/03/1931";
$nomeSimbólico = "Aurora";

abstract class Pessoa {
    public $cpf = "123456789-10";
    public $pais = "Sílvia e Paulo";
    public $amigos = "Bernardo Z, Bernardo L, Arthur, João, Mateus";
    public $dataDeNascimento = "18/07/2007";
    public $cnpj = "12045607891023";
    public $socios = "Gabriel e Bernardo";
    public $funcionarios = "Gabriel, João, Karine, Júlia, Giuliana, Érika";
    public $dataDeFundação = "19/03/1931";
    public $nomeSimbólico = "Aurora";

            public function andar($pernas, $pes){
             echo "A pessoa tá andando {$pernas} {$pes} <br> ";
        }
            public function pular($pernas, $pes){
             echo "A pessoa está pulando {$pernas} {$pes} <br> ";   
        }
            public function falar($boca, $voz){
             echo "A pessoa está falando {$boca} {$voz} <br> ";
        }

}
$pessoa = new Pessoa();
$pessoa->falar($boca, $voz);
$pessoa->andar($pernas,$pes);
$pessoa->pular($pernas,$pes);

//metodos mágicos tem "_" na frente executa antes de qualquer coisa