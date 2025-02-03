<?php
//chamando conectDb
require_once 'conectDb.php';

//iniciando uma session
session_start();

//verficação
if (!isset($_SESSION['logado'])) {
    header('Location: index.php');

}

//Dados
$id = $_SESSION['idUsuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$consulta = mysqli_query($connect , $sql);
$dados = mysqli_fetch_array($consulta);
mysqli_close($connect);

?>


<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Restrita</title>
</head>
<body>
    <h1>
        Usuario : <?php echo $dados['nome']; ?>
    </h1>
    <a href="logout.php">Sair</a>
</body>
</html>

