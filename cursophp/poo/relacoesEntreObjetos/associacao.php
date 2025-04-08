<?php

class Pedido {
    public $numero;
    public $cliente;

}

class Cliente {
    public $nome;
    public $endereco;

}

$cliente = new Cliente();
$cliente->nome="Ana Syu";
$cliente->endereco="rua: das Oliveiras , 123";

$pedido = new Pedido();
$pedido->numero = 01;
$pedido->cliente=$cliente;// associação

$info = array (

    'numero' => $pedido->numero,
    'nomeCliente' =>$pedido->cliente->nome,
    'enderecoCliente'=>$pedido->cliente->endereco
);
var_dump($info);