<?php

$planta = "Mangueira";
$n1 = 2;
$n2 = 4;

function pe(){
    
    global $planta;
    echo 'Planta: '.$planta,'';
}
pe();

echo '<hr>';

function mCaneta(){
    
    global $caneta;
    $caneta = "Bic"; 
    echo 'caneta : <b> '.$caneta.' </b>';
}
mCaneta();

echo '<hr>' ;
echo '<br> Soma de :'.$n1.' e '.$n2.'=' ;

function total(){
    
    echo $GLOBALS['n1'] + $GLOBALS['n2'];
}
total();
