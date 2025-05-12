<?php
//fibronacci. 0 1 1 2 3 5 8...

echo "Fibronacci <br>";
echo "<hr>";

$numSeq = 10; // Número de elementos da sequência 
$i = 0;  
$p = 1;  
$cont = 0;  

while ($cont < $numSeq) {  
    echo $i . " ";  
    $next = $i + $p;  
    $i = $p;  
    $p = $next; 
    $cont++;  
}  
