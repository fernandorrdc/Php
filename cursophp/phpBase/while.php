<?php

/*
No while, o teste condicional é feito no início do loop, enquanto no do while, o teste é feito no final. 
Explicação 
O while executa o loop enquanto a condição for verdadeira.
O do while executa o loop primeiro e depois verifica a condição.
O do while é útil quando é necessário executar o código dentro da estrutura de repetição pelo menos uma vez, sem passar pelo teste lógico. 


*/
echo "Wile <br>";

$i = 1;

while ($i <= 10) {
    echo "Cotando: $i <br>";
    $i ++;
}

echo "<br> Do Wile";
echo "<hr>";


$c = 1;

do {
    echo "Cotando: $c <br>";
    $c++;
} while ($c <= 10);


