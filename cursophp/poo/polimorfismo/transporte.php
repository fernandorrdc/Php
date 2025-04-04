<?php

class Transportes{
    public function Ligar(){
        return "coloca a chave proximo au volante e preciona o botão de partida Ligar";
    }

}

class Cars extends Transportes {
    public function Ligar(){
        return "<b>Carro sendo Ligado:</b>Insiro a chave no ingnição e giro na posição de Ligar";
    }

}

class Motos extends Transportes {
    public function Ligar(){
        return "<b>Moto sendo Ligada</b>:Com ela em macha Insiro a chave no ingnição e giro na posição de Ligar, preciona o botão ligar.";
    }

}

function Locomover(Transportes $transportes) {
    return $transportes->Ligar();
}

$carro = new Cars();
$moto = new Motos();

echo Locomover($carro) ."<br>";
echo Locomover($moto) ."<br>";