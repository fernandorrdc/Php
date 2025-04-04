<?php

use classes\Produto as Product;
use Modelos\Produto as Products;

require "Class/produto.php";
require "Models/produto.php";

$produto = new Product();
$produtos = new Products();

$produto->showDetails();
echo "<hr>";
$produtos->showDetails();


