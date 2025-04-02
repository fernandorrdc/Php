<?php

class Animais{

    private $classificacao;
    private $habitat;
    private $cor;

    public function getClassificacao(){
        return $this->classificacao;
    }

    public function getHabitat(){
        return $this->habitat;
    }

    public function getCor(){
        return $this->cor;
    }

    public function setClassificacao($classificacao){
        $this->classificacao=$classificacao;
    }

    public function setHabitat($habitat){
        $this->habitat = $habitat;
    }

    public function setCor($cor){
        $this->cor =$cor;
    }

    public function chamarAnimal(){
        echo "Eu Sou um :{$this->classificacao}, mora {$this->habitat}, tenho a cor {$this->cor}.";
    }
}

$animal = new Animais();

$animal->setClassificacao("Felino - Gato");
echo "<br>";
$animal->setHabitat("Em casas");


$animal->setCor("braca");
$animal->chamarAnimal();