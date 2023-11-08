<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio PHP</title>
    <link rel="stylesheet" href="style.css">
    

</head>
<body>
    <header>
        <h1>seja bem vindo!</h1>
    </header>

    <main>
        <?php 
            $n =$_GET ["nome"] ?? "Prencha o Nome ";
            $s = $_GET["snome"]?? "preencha o Sobrenome" ;
            
            echo "<p> Seus dados Sr(a) $n $s foram enviados </p>";
        ?>
        <button><a href="formulario.html">voltar</a></button>
    </main>
    
</body>
</html>