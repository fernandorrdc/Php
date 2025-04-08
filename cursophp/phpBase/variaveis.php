<?php

//variaveis globais
$nome = "Fernando Ricardo";
$n1 = 2;
$n2 = 4;
$n3 = 8;

function sNome()
{
    global $nome;
    echo $nome;
}

sNome();
echo '<hr>';

function mCidade()
{
    //variaveis LOCAIS
    global $cidade;
    $cidade = "Fortaleza";
}

mCidade();
echo $cidade;
echo "<hr>";

function soma()
{
    echo $GLOBALS['n1'] + $GLOBALS['n3'];
}
soma();
