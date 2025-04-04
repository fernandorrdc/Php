<?php

//GLOBALS

$a = 10;
$b = 20;

function soma (){
    echo $GLOBALS['a'] + $GLOBALS['b'];

}
soma();

echo "<hr>";
echo "<br>" ;

//$_SERVER

echo $_SERVER ['PHP_SELF'] . "<br>";
echo $_SERVER ['SERVER_NAME'] . "<br>";
echo $_SERVER ['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER ['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER ['SERVER_PORT'] . "<br>";
echo $_SERVER ['REMOTE_ADDR'] . "<br>";