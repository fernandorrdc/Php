<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserindo Multiplas imagens</title>
</head>
<body>
 
<?php

if (isset($_POST['enviar-formulario'])) {

   $formatosPermitidos = ["jpg", "png", "jpeg", "gif"];

   $i = 0;
   $qtdArquivos = count($_FILES['arquivo']['name']);


   while ($i < $qtdArquivos) {
    
   
   $extensao = pathinfo($_FILES['arquivo']['name'][$i], PATHINFO_EXTENSION);

    if (in_array($extensao, $formatosPermitidos)) {
        $pasta = "img/";
        $temporario = $_FILES['arquivo']['tmp_name'][$i];
        $novoNome = uniqid().".$extensao";

        if (move_uploaded_file($temporario, $pasta.$novoNome)) {
            echo "upload feito com sucesso! $pasta $novoNome <br>";
        }else {
            $msn = "Erro ao enviar o Arquivo $temporario!";
        }
    }else {
        echo "Essa extensaão: <b>$extensao </b> ,não é permitida! <br>";
    }
    $i++;

   } 
}

?>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

    <input type="file" name="arquivo[]" multiple><br><!-- acrescentar multiple em um array , arquio passa a ser -->
    <input type="submit" name="enviar-formulario"><br>

</form>
    
</body>
</html>