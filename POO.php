<?php

// $numero = $objCarro ; //atribuição
// $objCarro = new stdclass(); //Instância

// // funções || métodos 
// // objeto || classe
// // propridades || atributos
//  class Carro {
//         public $marca;
//         public $cor;
//         public $tamanho;
//         public $modelo;
//         public $potência;

//         protected function trocarMarcha() { // depende apenas do motorista
//         }

//         private function arrumarMotor() { //depende apenas do mecânico
//         }
//     }
  

//   class Motorista {
//     function dirigir () { 
//         //uber, f1. convencional (função de diferenciar os tipos, POLIMORFIA)
//     }
//   }
// // PARA ISSO FUNCIONAR:: "chamar a classe motorista pois ela por enquanto não está fora da classe motorista"
//  $motorista = new Motorista();
//  $motorista->dirigir();

$pernas = " ";
$pes = " ";
$boca = " ";
$voz = " ";
$nome = "Gabriel" ;
$idade = "16";
$sexo = "Masculino";
$nomePai = "Paulo";
$nomeMae = "Sílvia";
$estadoCivil = "Solteiro";
$profissao = "Menor aprendiz da TI e do Marketing, Funcionário do movie art"; 
$escolaridade = "Ensino Médio Incompleto";
$telefone = "54996110230";

  class Pessoa {
    public $nome;
    public $idade;
    public $sexo;
    public $nomePai;
    public $nomeMae;
    public $estadoCivil;
    public $profissao;
    public $escolaridade;
    public $telefone;

        //   public function _construct($nome, $idade, $sexo, $nomePai, $nomeMae, $estadoCivil, $profissao, $escolaridade, $telefone);  
                    // $this->nome = $nome;
                    // $this->idade = $idade;
                    // $this->sexo = $sexo;
                    // $this->nomePai = $nomePai;
                    // $this->nomeMae = $nomeMae;
                    // $this->estadoCivil = $estadoCivil;
                    // $this->profissao = $profissao;
                    // $this->escolaridade = $escolaridade;
                    // $this->telefone = $telefone;

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