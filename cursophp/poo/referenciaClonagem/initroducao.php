<?php

class Pessoa {
    public $idade;

    public function __clone()
    {
        echo "refere-se ao local digitado clone.";
    }

}
$pessoa = new Pessoa();
$pessoa->idade = 25;

$pessoa2 = clone $pessoa;
$pessoa2->idade = 35;

echo $pessoa2->idade;

