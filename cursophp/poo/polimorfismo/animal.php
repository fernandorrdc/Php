<?php
//polimorfismo := substituir ou reescrever metodo herdado da superclass.
class Animais {

    public function Comer() {
        echo "Animal Comendo!";
    }

    public function Pastar (){
        echo "animal está pastando!";
    }
}

class Cavalo extends Animais {

    //funçao reecrita
    public function Comer() {
        $this->Pastar();//mostrar essa opção
    }
}

$animal = new Cavalo();
$animal->Comer();