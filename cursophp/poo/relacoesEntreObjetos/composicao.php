<?php
/*
Relação de Composição:

No exemplo, a relação entre Carro e Motor/Pneu é de composição porque:

O Carro "tem um" Motor e "tem vários" Pneus.
O ciclo de vida do Motor e dos Pneus está intimamente ligado ao ciclo de vida do Carro. Se o objeto Carro for destruído, é provável que o Motor e os Pneus que pertenciam a ele também não tenham mais sentido no mesmo contexto.
O Carro é responsável por receber as instâncias de Motor e Pneu em seu construtor, indicando uma dependência forte.

*/

class Pneu {
    private string $marca;
    private int $aro;

    public function __construct(string $marca, int $aro) {
        $this->marca = $marca;
        $this->aro = $aro;
    }

    public function getInfoPneu(): string {
        return "Pneu: Marca={$this->marca}, Aro={$this->aro}";
    }
}

class Motor {
    private string $tipo;
    private int $potencia;

    public function __construct(string $tipo, int $potencia) {
        $this->tipo = $tipo;
        $this->potencia = $potencia;
    }

    public function ligar(): string {
        return "Motor {$this->tipo} ligado!";
    }

    public function getInfoMotor(): string {
        return "Motor: Tipo={$this->tipo}, Potência={$this->potencia} HP";
    }
}

class Carro {
    private string $modelo;
    private string $cor;
    private Motor $motor; // Composição: Carro TEM UM Motor
    private array $pneus; // Composição: Carro TEM VÁRIOS Pneus

    public function __construct(string $modelo, string $cor, Motor $motor, Pneu $pneuDianteiroEsquerdo, Pneu $pneuDianteiroDireito, Pneu $pneuTraseiroEsquerdo, Pneu $pneuTraseiroDireito) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->motor = $motor;
        $this->pneus = [$pneuDianteiroEsquerdo, $pneuDianteiroDireito, $pneuTraseiroEsquerdo, $pneuTraseiroDireito];
    }

    // Método para ligar o carro (usa o método do objeto Motor)
    public function ligarCarro(): string {
        return "{$this->modelo}: " . $this->motor->ligar();
    }

    // Método para exibir informações do carro e seus componentes
    public function exibirInfo(): void {
        echo "Carro: Modelo={$this->modelo}, Cor={$this->cor}<br>";
        echo $this->motor->getInfoMotor() . "<br>";
        foreach ($this->pneus as $pneu) {
            echo $pneu->getInfoPneu() . "<br>";
        }
    }
}

// Criando objetos das classes Motor e Pneu
$motorCarro = new Motor("Combustão", 150);
$pneu1 = new Pneu("Michelin", 16);
$pneu2 = new Pneu("Michelin", 16);
$pneu3 = new Pneu("Pirelli", 17);
$pneu4 = new Pneu("Pirelli", 17);

// Criando um objeto da classe Carro, COMPONDO-o com os objetos Motor e Pneu
$meuCarro = new Carro("Sedan", "Prata", $motorCarro, $pneu1, $pneu2, $pneu3, $pneu4);

// Utilizando os métodos do objeto Carro
echo $meuCarro->ligarCarro() . "<br>";
$meuCarro->exibirInfo();

