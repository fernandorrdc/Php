<?php
 //constantes

define("NOME", "Fernando Costa");
define("IDADE",47);
define("ALTURA", 1.75);
define("CASADO", true);


echo 'Meu nome é:<b> '.NOME.'</b> , <br>Tenho '.IDADE.' <br>Minha altura é '.ALTURA.'. ';

echo "<br>";

function eCivil(){
    echo 'estado civil casado: '.CASADO.'';
}
eCivil();
//ARRAIS

echo '<hr>';
define("CARROS",['gol', 'ferrary', 'amaro']);

echo "<br>".var_dump(CARROS);