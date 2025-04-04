<?php

class Pessoa {
    public $nome;
    public $idade;

    public function apresentar(){
        echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.<br>";
    }
}

$fernando = new Pessoa();
$fernando->nome = "Fernando Ricardo";
$fernando->idade = 30;
$fernando->apresentar();