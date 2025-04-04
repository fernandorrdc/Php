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

funções - filter-input e filter_var
FILTER_VALIDATE_INT
FILTER_VALIDATE_EMAIL
FILTER_VALIDATE_FLOAT
FILTER_VALIDATE_IP
FILTER_VALIDATE_URL

*/

/*
verificando se foi enviado e var_dump array criado

if (isset($_POST['enviar-formulario'])) {
    echo "Enviado <br>";
    var_dump($_POST);
}

Mostra o que foi digitado 
if (isset($_POST['enviar-formulario'])) {

    $erros = array();
    $idade = $_POST['idade'];
    echo $idade;

}


*/

if (isset($_POST['enviar-formulario'])) { //ISSERT  = EXIXTE.

    //array de erros
    $erros = [];
    
    //validações
    if (!$idade = filter_input(INPUT_POST, 'idade' , FILTER_VALIDATE_INT)) {
        $erros[] = "Idade é um Número Ineriro.";
    }

    if (!$email = filter_input(INPUT_POST, 'email' , FILTER_VALIDATE_EMAIL)) {
        $erros[] = "email invalido!";
    }

    if (!$peso = filter_input(INPUT_POST, 'peso' , FILTER_VALIDATE_FLOAT)) {
        $erros[] = "Peso inexistente!";
    }

    if (!$url = filter_input(INPUT_POST, 'url' , FILTER_VALIDATE_URL)) {
        $erros[] = "URL invalida!";
    }

    if (!$ip = filter_input(INPUT_POST, 'ip' , FILTER_VALIDATE_IP)) {
        $erros[] = "IP invalida!";
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
    <legend>Controle</legend>

<label>Idade</label>  <input class="campo_idade" type="text"  name="idade"><br>
<label>Peso:</label>  <input class="campo_peso"  type="text"  name="peso"><br>
<label>Email:</label> <input class="campo_email" type="email" name="email"><br>
<label>URL :</label>  <input class="campo_url"   type="text"  name="url"><br>
<label> IP :</label>  <input class="campo_ip"    type="text"  name="ip"><br>

<button class="btn_submit" type="submit" name="enviar-formulario">Enviar</button>
</fieldset>
</form>
</div>
</body>
</html>