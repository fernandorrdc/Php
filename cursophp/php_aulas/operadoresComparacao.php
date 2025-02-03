<?php

//Operadores de Comparação

/*
$a == $b	Igual	true se $a é igual a $b após equalização de tipos.
$a === $b	Idêntico	true se $a é igual a $b, e eles são do mesmo tipo.
$a != $b	Diferente	true se $a não é igual a $b depois de equalização de ativos.
$a <> $b	Diferente	true se $a não é igual a $b depois de equalização de ativos.
$a !== $b	Não idêntico	true se $a não é igual a $b, ou eles não são do mesmo tipo.
$a < $b	    Menor que	true se $a é estritamente menor que $b.
$a > $b	    Maior que	true se $a é estritamente maior que $b.
$a <= $b	Menor ou igual	true se $a é menor ou igual a $b.
$a >= $b	Maior ou igual	true se $a é maior ou igual a $b.
$a <=> $b	Spaceship (nave espacial)	Um int menor que, igual a ou maior que zero quando $a é, respectivamente, menor que, igual a ou maior que $b.



*/
//nave espacial;

var_dump(10<=>20);//lado esquero > "-"
echo "<br>";
var_dump(10<=>10); //lados iguais "0"
echo "<br>";
var_dump(20<=>10); //Lado direito > "+"

echo "<br>";
echo "<hr>";
//<> de == e ===

if (2 == "2") {
    echo "são iguais";
}else {
    echo "são diferentes";
}

echo "<br>";
echo "<hr>";

if(2 === "2"):
  echo "iguais";
else:
  echo "Diferentes";
endif;      




