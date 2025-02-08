<?php

//Session
session_start();

//conexão
require_once 'connect.php';

if (isset($_POST['btnCadastrar'])) {
    $nome = mysqli_escape_string($connect, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connect, $_POST['sobrenome']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $idade = mysqli_escape_string($connect, $_POST['idade']);


    $sql = "INSERT INTO clientes (nome, sobrenome, email, idade) VALUE ('$nome', '$sobrenome' , '$email', '$idade')";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = "cadastrado com SUcesso!";
        header('Location: ../index.php');
    }else {
        $_SESSION['msg'] = "Erro ao Cadastrar!";
        header('Location: ../index.php');
    }
}