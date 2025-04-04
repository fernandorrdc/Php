<?php

// Classe base
class Comida {
    public function preparar() {
        return "Comida sendo preparada...";
    }
}

// Subclasses
class Pizza extends Comida {
    public function preparar() {
        return "Pizza sendo preparada com queijo e pepperoni...";
    }
}

class Hamburguer extends Comida {
    public function preparar() {
        return "Hamburguer sendo preparado com carne e salada...";
    }
}

class Salada extends Comida {
    public function preparar() {
        return "Salada sendo preparada com alface, tomate e cenoura...";
    }
}

// Função que demonstra o polimorfismo
function cozinhar(Comida $comida) {
    return $comida->preparar();
}

// Exemplos de uso
$pizza = new Pizza();
$hamburguer = new Hamburguer();
$salada = new Salada();

echo cozinhar($pizza) . "<br>";
echo cozinhar($hamburguer) . "<br>";
echo cozinhar($salada) . "<br>";
