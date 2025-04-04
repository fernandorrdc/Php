<?php

//numerod
$n = 1233.23;

$valor = number_format($n, 2, "," , ".");
echo " O preço é : R$ $valor";


echo "<hr>";
echo "<br>";

//textos

$nome = "ana maria";
$nome2 = "ALAN LIMA";

$maiuscula = strtoupper($nome);
$minuscula = strtolower($nome2);

echo " nome convertido  em maiúsculo: $maiuscula <br> ";
echo " nome  convertido em minuscula: $minuscula <br> "; 

echo "<hr>";
echo "<br>";

//criando funções

function meuAnimal ($nome){
    echo "$nome é nome do meu Gato";
}
meuAnimal("guagirú");//chama a função.

echo "<hr>";
echo "<br>";

function mediAlunos($nome, $av1, $av2 ){

    $media = ($av1 + $av2)/2 ;
    
    if ($media >=7) {
        echo "$nome <br> Aprovado com a Média :<b> $media </b> <br> ";
    }else {
        echo "$nome <br> Reprovado com a Média : <b> $media </b> <br> ";
    }
 
}
mediAlunos("joão", 4,3 , 8 );
mediAlunos("Maria", 7, 9);