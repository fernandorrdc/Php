<?php

$classes = array("alfabetização"=>"A","fundamental"=>"B","Médio"=> "C");

$classes ["fundamental"]="E";

print_r($classes);
echo "<br>";
echo'Qtd de itens do Array:<br>';
echo count($classes).'<br>';

function mClasses(){
    global $classes;
    echo 'classe alfabetização: '.$classes["alfabetização"].'<br>';
}
mClasses();

$jogos = ["Dama", "Firo", "xadrez"];
print_r($jogos);