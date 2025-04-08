<?php

/*
A agregação é uma forma flexível de relacionar objetos onde um objeto contém outros, mas a existência e o ciclo de vida desses objetos contidos são independentes. Isso promove o reuso de código e a criação de sistemas mais modulares.
 */


 class Motor {
     public string $tipo;
     public int $potencia;
 
     public function __construct(string $tipo, int $potencia) {
         $this->tipo = $tipo;
         $this->potencia = $potencia;
     }
 
     public function ligar(): string {
         return "Motor {$this->tipo} de {$this->potencia} HP ligado.";
     }
 }
 
 class Carro {
     public string $modelo;
     public string $cor;
     public ?Motor $motor; // O carro PODE ter um motor (agregação)
 
     public function __construct(string $modelo, string $cor, ?Motor $motor = null) {
         $this->modelo = $modelo;
         $this->cor = $cor;
         $this->motor = $motor;
     }
 
     public function exibirDetalhes(): void {
         echo "Modelo: {$this->modelo}<br>";
         echo "Cor: {$this->cor}<br>";
         if ($this->motor) {
             echo "Motor: {$this->motor->tipo} ({$this->motor->potencia} HP)<br>";
             echo $this->motor->ligar() . "<br>";
         } else {
             echo "Este carro não possui um motor.<br>";
         }
     }
 }
 
 // Criando um objeto Motor
 $motorV8 = new Motor("V8", 350);
 
 // Criando um objeto Carro e associando um Motor a ele (agregação)
 $meuCarro = new Carro("Mustang", "Vermelho", $motorV8);
 $meuCarro->exibirDetalhes();
 echo "<br>";
 
 // Criando outro objeto Carro sem um Motor
 $carroAntigo = new Carro("Fusca", "Azul");
 $carroAntigo->exibirDetalhes();
 echo "<br>";
 
 // O objeto $motorV8 ainda existe mesmo depois que $meuCarro é "desfeito"
 unset($meuCarro);
 echo "Motor V8 ainda existe: " . $motorV8->ligar() . "<br>";
 
 