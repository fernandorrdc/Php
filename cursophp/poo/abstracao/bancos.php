<?php

abstract class Bancos {
    
    protected $saldo;
    protected $limiteSaque;
    protected $juros;

    public function getSaldo(){
        return $this->saldo;
    }

    public function setSaldo($saldo){
        $this->saldo= $saldo;
    }

    public function getLimiteSaque(){
        return $this->limiteSaque;
    }

    public function setLimiteSaque($ls){
        $this->limiteSaque=$ls;
    }
        
    public function getJuros(){
        return $this->juros;

    }

    public function setJuros($juros){
        $this->juros=$juros;
    }


    abstract protected function Sacar($s);
    abstract protected function Despositar($d);

    class Itauoca extends Bancos {

        public function Sacar($s){
        
            $this->saldo -=$s;
            echo "<hr> saque realizado com sucesso!".$s;
        }

        public function Depositar($d){
           
            $this->saldo += $d;
            echo "<hr> Deposito relizado com sucesso!. ".$d;
        }

}

$itauoca = new Itauoca();
$itauoca ->setSaldo(10000);
echo "<hr> saldo : ".$itauoca->getSaldo();


}


