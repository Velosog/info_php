<?php

interface IVeiculo{  //prefixo I "interface" vai dizer quais métodos a classe que vai emplementar ela vai necessitar
    public function dirigir ($chave);
}

abstract class Veiculo implements IVeiculo {
    public function dirigir ($chave) {
        /* 
        colocar cinto de segurança
        colocar em ponto morto
        ligar o carro
        engatar a marcha
        acelerar
        soltar a embreagem
        */
        echo "estou dirigindo... {$chave}<br>";
    }
}

class Carro extends Veiculo {
    public $chave = "chave_presencial";

    public function andar() {
        $this->dirigir($this->chave);
        echo "estou andando... <br><br>";
    }
}

class Trator extends Veiculo {
    public $chave = "chave_trator ";
    public function levantarArador() {
        echo "o arador está sendo levantado. <br>";
        $this->dirigir($this->chave);
        echo "estou andando... <br><br>";
    }

    public function arar() {
    }
}

class Carreta extends Veiculo {
    public $chave = "chave_canivete";
    
    public function viajar() {
        $this->verificarOleoMotor();
        echo "o óleo do motor foi verificado. <br>";
        $this->dirigir($this->chave);
        echo "estou andando <br>";
    }    
    
    public function verificarOleoMotor() {
    }
}

$carro = new Carro();
$carro-> andar();

$trator = new Trator();
$trator-> levantarArador();
$trator-> dirigir();
$trator-> arar();

$carreta = new Carreta();
$carreta-> verificarOleoMotor();
$carreta-> dirigir();
$carreta-> viajar();
