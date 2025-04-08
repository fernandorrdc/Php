<?php
//
class Produtos{

    public $nome;
    public $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produtos;

    //agregação
    public function adiciona(Produtos $produto) {
        $this->produtos[] = $produto;

    }

    public function exibirProdutos (){

        foreach ($this->produtos as $produto) {
            echo $produto->nome  .'<br>';
            echo $produto->valor .'<hr>';
            
        }
    }

}

$produto1 = new Produtos("Notebook - sansung", 2000);
$produto2 = new Produtos("Mouse",4.99 );

$carrinho = new Carrinho();
$carrinho->adiciona($produto1);
$carrinho->adiciona($produto2);

$carrinho->exibirProdutos();