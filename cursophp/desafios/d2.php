<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Aleatórios com intervalos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Números Aleatórios entre 1 - 100
        </h1>
    </header>
    <section>
        <?php 
            define("INFERIOR",1);
            define("SUPERIOR",100);
            $numero = rand(INFERIOR, SUPERIOR);
            echo "<h2> Número Sortado :<strong> $numero </strong> </h2><br>";
        ?>
        <form>
            <button type="submit" formaction="">Sortear</button><!--f5 em uma página-->
        </form>
    </section>
</body>
</html>

