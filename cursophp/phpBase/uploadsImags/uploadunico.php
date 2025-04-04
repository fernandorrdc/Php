<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserindo imagens</title>
</head>
<body>
 
<?php

if (isset($_POST['enviar-formulario'])) {
    $formatosPermitidos = ["jpg", "png", "jpeg", "gif"];
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "img/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if (move_uploaded_file($temporario, $pasta.$novoNome)) {
            $msn = "upload feito com sucesso!";
        }else {
            $msn = "não foi possivél realizar o upload!";
        }
    }else {
        $msn = "Formato Inválido!"; 
    }
    echo $msn."<br>";
    //var_dump($_FILES);
}


?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

   <label>Escolha:</label> <input type="file" name="arquivo"><br>
    <input type="submit" name="enviar-formulario"><br>

</form>
    
</body>
</html>