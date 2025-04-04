<?php

//Session
session_start();

//conexão
require_once 'connect.php';

if (isset($_POST['btnEditar'])) {

    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);


    $sql = " UPDATE clientes SET nome = '$nome', sobrenome = '$sobrenome', email = '$email' , idade = '$idade' WHERE id = '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = "Atualizado com SUCESSO!";
        header('Location: ../index.php');
    }else {
        $_SESSION['msg'] = "Erro ao Atualizar!";
        header('Location: ../index.php');
    }
}