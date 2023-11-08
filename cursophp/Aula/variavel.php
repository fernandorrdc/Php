<!DOCTYPE html>

<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variavél e const</title>
</head>

<style>

    * {
        font-family: 'Times New Roman', Times, serif;
     }

</style>

<body>
    <?php 

        $nome = "Feranando";
        $sobrenome ="Costa";
        const PAIS ="Brasil";

        $Snome = "Fernando Ricardo";
        
        echo "<h1>olá Senhor(a) $nome $sobrenome <br>!você mora no " .PAIS;
    
    ?>
    
</body>

</html>