<?php

abstract class Bancos {
    protected float $saldo;
    protected float $limiteSaldo;
    protected float $juros;

    public function __construct(float $saldoInicial = 0, float $limiteSaldo = 0, float $juros = 0) {
        $this->saldo = $saldoInicial;
        $this->limiteSaldo = $limiteSaldo;
        $this->juros = $juros;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function setSaldo(float $saldo): void {
        $this->saldo = $saldo;
    }

    public function getLimiteSaldo(): float {
        return $this->limiteSaldo;
    }

    public function setLimiteSaldo(float $limiteSaldo): void {
        $this->limiteSaldo = $limiteSaldo;
    }

    public function getJuros(): float {
        return $this->juros;
    }

    public function setJuros(float $juros): void {
        $this->juros = $juros;
    }

    abstract protected function Sacar(float $valor): bool;
    abstract protected function Depositar(float $valor): bool;
}

class Itauoca extends Bancos {
    
    protected function Sacar(float $valor): bool {
        if ($valor <= ($this->saldo + $this->limiteSaldo)) {
            $this->saldo -= $valor;
            return true;
        } else {
            return false;
        }
    }

    protected function Depositar(float $valor): bool {
        $this->saldo += $valor;
        return true;
    }
}

// Demonstração de uso
$contaItauoca = new Itauoca(1000, 500); // Saldo inicial 1000, limite 500

echo "Saldo inicial: " . $contaItauoca->getSaldo() . "<br>";

$contaItauoca->Depositar(1500);
echo "Saldo após depósito: " . $contaItauoca->getSaldo() . "<br>";

$contaItauoca->Sacar(100);
echo "Saldo após saque: " . $contaItauoca->getSaldo() . "<br>";

?>