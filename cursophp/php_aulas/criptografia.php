<?php

$senha = 12345;

$novaSenha = base64_encode($senha);
echo "<h1>criptografias </h1>";

echo "<hr>";
echo "<b>descriptografanndo</b> : ". base64_decode($novaSenha),"<br>";
echo "<b>base64</b> :".$novaSenha."<br>";
echo "<hr>";
echo "<b>md5</b> :" .md5($novaSenha)."<br>";//não descriptografa
echo "<hr>";
echo "<b>sha1</b>: " .sha1($novaSenha)."<br>";//não descriptografa

//https://crackstation.net/

echo "<hr>";
$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
echo "<b>password_hash</b>: " .$senhaSegura. "<br>";//muda ao atualizar