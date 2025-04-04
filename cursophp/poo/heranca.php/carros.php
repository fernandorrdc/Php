<?php
//conecta a págiga 
require_once 'veiculos.php';

class Carros extends Veiculos
{
    private $portas;
    private $cambio;
    private $motor;

    //construtor
    public function __construct($portas, $cambio, $motor)
    {
       $this->setPortas($portas);
       $this->setCambio($cambio);
       $this->setMotor($motor); 
    }

     //metodos gets e sets

    public function getPortas()
    {
        return $this->portas;
    }

    public function getCambio()
    {
        return $this->cambio;
    }

    public function getMotor()
    {
        return $this->motor;
    }

    public function setPortas($portas)
    {
        $this->portas = $portas;
    }
    public function setCambio($cambio)
    {
        $this->cambio = $cambio;
    }
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }
    
    public function chamarCarro()
    {
        
    echo "{$this->getPortas()}, cambio {$this->getCambio()}, motor {$this->getMotor()}.";

    }
}

$carro = new Carros("5"," automático de 6 velocidades","motor diesel 2.8L 16V Turbo com Intercooler, com 4 cilindros em linha");

$veiculo->chamarVeiculo();
$carro->chamarCarro();