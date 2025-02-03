<?php

define ("Cód", "Adm");
define ("Cliente", 2);
define ("carteira" , 200.2);
define ("Filhos" , true);

echo 
'Cliente : '. Cliente.' <br>
 Possue <i> '. carteira.'</i> em sua carteira';

echo '<br>';

function sFilhos (){
    echo 'Pssue Filhos : 0 ou 1 = '. Filhos.'';
} 
sFilhos();
