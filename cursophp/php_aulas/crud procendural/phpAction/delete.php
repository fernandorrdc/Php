<?php

//Session
session_start();

//conexão
require_once 'connect.php';

if (isset($_POST['btnDeletar'])) {

    $id = mysqli_escape_string($connect, $_POST['id']);
    
    $sql = "DELETE FROM clientes WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = "Apagado com SUCESSO!";
        header('Location: ../index.php');
    }else {
        $_SESSION['msg'] = "Erro ao Apagar!";
        header('Location: ../index.php');
    }
}
