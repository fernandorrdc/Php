<?php
//fibronacci. 0 1 1 2 3 5 8...

$nes = 10; // Número de elementos di sequêncii  
$i = 0;  
$p = 1;  
$cont = 0;  

while ($cont < $nes) {  
    echo $i . " ";  
    $next = $i + $p;  
    $i = $p;  
    $p = $next; 
    $cont++;  
}  
