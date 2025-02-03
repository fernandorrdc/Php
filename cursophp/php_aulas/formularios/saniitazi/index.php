<!DOCTYPE html>
<html lang="PT-BR">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de dados</title>

    
    <link rel="stylesheet" type="text/css" href="estilos.php" />
    

</head>
<body>

<?PHP
/*
SANITIZAÇÃO - LIMPAR ALGO A MAIS DOQUE A FORMATAÇÃO EXIGIDA.
funções - FILTER_VAR
FILTER_SANITIZE_SPACIAL_CHAR
FILTER_SANITIZE_INT
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_URL

*/
if (isset($_POST['enviar-formulario'])) { //ISSERT  = EXIXTE.

    //array de erros
    $erros = [];
    
    //SANITIZE - LIMPAR VARIAVÉIS.

    $nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_FULL_SPECIAL_CHARS);//evita código htm na página
   // echo $nome."<br>";
    
    $idade = filter_input(INPUT_POST, 'idade' , FILTER_SANITIZE_NUMBER_INT);
    //digitando texto e número ele envia somente número.
   // echo $idade."<br>";
    if (!filter_var($idade , FILTER_VALIDATE_INT)) {
    $erros[] = "Idade só aceita número inteirsos";

    }

    $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_EMAIL);//limpar algo <> formato de email
    //echo $email."<br>";
    if (!filter_var($email , FILTER_VALIDATE_EMAIL)) {
        $erros[] = "email inválido !";
    }
    $url = filter_input(INPUT_POST, 'url' , FILTER_SANITIZE_URL);//evita código htm na página
    //echo $url."<br>";
    if (!filter_var($url , FILTER_VALIDATE_URL)) {
        $erros[] = "URL inválida";
    }

    //exibindo menssagens

    if (!empty($erros)) { //se não estiver vazio erros, cria uma lista com forreach.

        foreach($erros as $erro):
            echo "<li> $erro </li>";
        endforeach;

    }else {
        echo "Dados Corretos!";
    }
    
}
?>

<div id = "area">
<form id="formulario" action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- RETORNA O NOME DO ARQUIVO -->
<fieldset>
    <legend>login</legend>

    <label>Nome:</label>  <input class="campo_nome"  type="text"  name="nome"><br>
    <label>Idade</label>  <input class="campo_idade" type="text"  name="idade"><br>
    <label>Email:</label> <input class="campo_email" type="email" name="email"><br>
    <label>URL :</label>  <input class="campo_url"   type="text"  name="url"><br>

    <button class="btn_submit" type="submit" name="enviar-formulario">Enviar</button>

</fieldset>
</form>
</div>
</body>
</html>