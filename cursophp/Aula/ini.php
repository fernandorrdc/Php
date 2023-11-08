<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php1</title>
</head>
<body>
    <h1>

<?php 
    date_default_timezone_set("America/Sao_Paulo");//Muda de - CET -configurando padrão (GMT -3)
    echo "olá mundo! \u{1F5FE} <br>";
    echo "Hoje é " .date("d/M/y");//"d" - D -maiusculo dia da semana
    echo "hora" .date("G:i:s");

?>
    </h1>
</body>
</html>