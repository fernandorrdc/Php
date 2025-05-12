<?php
 //constantes

define("NOME", "Milan");
define("IDADE",47);
define("ALTURA", 1.75);
define("CASADO", true);


echo 'Nome:<b> '.NOME.'</b> , <br>Tenho '.IDADE.' <br> Minha altura é '.ALTURA.'. ';
echo "<br>";

function eCivil(){
    echo 'estado civil :Casado: '.CASADO.'';
}
eCivil();
