<?php
//chamando conectDb
require_once 'conectDb.php';

//iniciando uma session
session_start();

if (isset($_POST['btnEntrar'])) : //verificando ao clicar botão, ele envia via $_POST

    $erros = [];
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    //verificando se  os campos estão vazios;
    if (empty($login) or empty($senha)) :
        $erros[] = "<li>O cmpo login/Senha não pode(m) estar vazo(os)!</li>";

    //verificar se esse login tem na base de dados - sql
    else :
        $sql = "SELECT login FROM usuarios WHERE login ='$login'";
        $consulta =  mysqli_query($connect, $sql);

        if (mysqli_num_rows($consulta) > 0) :

            //criptografando
            $senha = md5($senha);

            // verrificar no BD se uuaio e senha confere com digitado   
            $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
            $consulta =  mysqli_query($connect, $sql);

            if (mysqli_num_rows($consulta) == 1) :

                $dados = mysqli_fetch_array($consulta); //converter consulta em array e atribuir $dados  
                mysqli_close($connect); //fechando a conexão.
                $_SESSION['logado'] = true;
                $_SESSION['idUsuario'] = $dados['id'];
                header('Location: home.php');

            else :
                $erros[] = "<li> Usuário e senha não confere !</li>";

            endif;
        //verificar senha - confere com ado BD         
        else :
            $erros[] = "<li> Usuário inexistente !</li>";

        endif;
    endif;
endif;

?>

<!DOCTYPE html>

<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login básico</title>
</head>

<body>
    <h1>Login</h1>

    <?php

    //lista do array erros - mostrar: caso não esteja vázio - por que tem erro.!
    if (!empty($erros)) { //empty = verifica se a variavel está vaziz
        foreach ($erros as $erro) {
            echo $erro . "<br>";
        }
    }

    ?>
    <hr>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

        <label>Login:</label> <input type="text" name="login"><br>
        <label>Senha:</label> <input type="password" name="senha"><br>
        <button type="submit" name="btnEntrar">Entrar</button>

    </form>

</body>

</html>