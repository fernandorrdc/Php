<?php

/* um recurso que permite armazenar dados de usuários durante a navegação em um site

As sessões são úteis para: 

Verificar se um usuário está logado
Controlar as permissões de acesso do usuário
Transportar o conteúdo de um carrinho de compras
Personalizar a experiência do usuário

*/

session_start(); //iniciar


//criado 2 sessoes
$_SESSION['Aluno'] = "Amisterdam Silva";
$_SESSION['Turno'] = "Tarde";

echo $_SESSION['Aluno'] . "<br>" . $_SESSION['Turno']."<br>".session_id();

