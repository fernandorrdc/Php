<?php

class Alunos {
    const nome = "Michele";

    public function exibirNome() {
        echo self::nome;
    }

}

class Pessoas extends Alunos{

    const nome = "Feitosa";

    public function exibirNome() {
        echo parent::nome;//referese a class pai : Aluno
    }

}

$pessoas = new Pessoas();
$pessoas->exibirNome();