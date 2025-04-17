<?php

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();

//$produto->setId(3);
//$produto->setNome('mouse ');
//$produto->setDescricao('com fio - longin');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->create($produto);
//$produtoDao->update($produto);
$produtoDao->delete(4);
$produtoDao->read();

foreach ($produtoDao->read() as $produto):
    echo $produto['nome'] . "<br>" . $produto['descricao'] . "<hr>";
endforeach;
