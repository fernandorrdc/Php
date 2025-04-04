<?php

for ($i=0; $i <=10 ; $i++) { 
    
    echo "Contando de : $i <br>";

}

echo"<hr>";
echo"<br>";

echo"<b>Tabuada dos 9: </b> <br>";

for($c=1; $c <=10; $c++){

    echo "9 x $c = " .($c * 9)."<br>";
}

echo"<hr>";
echo"<br>";

//revisando FOREACH

$canetas = [1=>"Bic", 2=>"Pilot" ,4=>"3M"];
$canetas[3] = "BN";

foreach ($canetas as $indice => $valor):
    
    echo $indice."-". $valor."<br>";

endforeach;

