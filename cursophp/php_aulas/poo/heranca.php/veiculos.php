<?php


class Veiculos
{
    //atributos
    private $marca;
    private $modelo;
    private $cor;
    private $ano;
    private $placa;

    //metodos get e set

    public function __construct($marca,$modelo,$cor,$ano,$placa){
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setAno($ano);
        $this->setplaca($placa);
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function getCor()
    {
        return $this->cor;
    }

    public function getAno()
    {
        return $this->ano;
    }

    public function getPlaca()
    {
        return $this->placa;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setCor($cor)
    {
        $this->cor = $cor;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;
    }
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    public function chamarVeiculo()
    {
        echo "O modelo do Meu carro e {$this->getModelo()}, tem a Cor {$this->getCor()}, Comprado no ano de {$this->getAno()}, cuja placa {$this->getPlaca()}";
    }
}

$veiculo = new Veiculos("Toyota"," SW4 (Sport Wagon 4)","Preto Metálico","2025","FRR-1218");




