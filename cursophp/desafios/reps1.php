<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta antecessor e Sucesssor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <header>
    <h1> Antecessor e Sucesssor </h1>
    </header>
        <main>
            <?php 
                 $resp = $_GET ["numero"];
                 $ant =$resp-1;
                 $suc =$resp+1;

            echo "o antecessor de $resp , é $ant e sucessor é: $suc";
        
            ?>
            
            <br>
            <a href="d1.html">voltar</a>
        </main>
    
</body>
</html>