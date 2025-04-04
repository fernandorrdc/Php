<?php

class Pessoa {

    const nome = "Fernando";

    public function exibirNome(){
        echo self::nome;

    }
}

$pessoa = new Pessoa();
$pessoa->exibirNome();
