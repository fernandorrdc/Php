<?php

define ("Cód", "Adm");
define ("Cliente", 2);
define ("carteira" , 100000000);
define ("Filhos" , true);

echo 
'Cliente : '. Cliente.' <br>
 Possue :<b><i> '. carteira.'</i></b> em sua carteira';

echo '<br>';

function sFilhos (){
    echo 'Tem Filhos :<br> 0 ->falso e  1 -> verdadeiro = '. Filhos.'';
} 
sFilhos();
