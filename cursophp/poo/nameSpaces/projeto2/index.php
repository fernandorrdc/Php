<?php
// Inclui os arquivos das classes e funções
require_once 'classes/Usuario.php';
require_once 'classes/Produto.php';
require_once 'funcoes/helpers.php';

// Usa a palavra-chave "use" para importar as classes e funções
use MeuProjeto\Classes\Usuario;
use MeuProjeto\Classes\Produto;
use MeuProjeto\Funcoes\formatarData;

// Cria instâncias das classes
$usuario = new Usuario();
$produto = new Produto();

// Chama os métodos das classes
$usuario->exibirNome("João");
echo "<br>";
$produto->exibirPreco(20.12);
echo "<br>";

// Chama a função do namespace Funcoes
$dataFormatada = formatarData('05-12-1998');
echo "Data formatada: " . $dataFormatada;
