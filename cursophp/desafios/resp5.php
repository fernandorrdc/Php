<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analise do Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Analisando Temos:
        </h1>
    </header>
    <main>
        <section>
        
            <?php 
                $dec = $_GET["decimal"] ?? 0;

                echo "<p> O Número informado <strong>" . number_format($dec, 3, "," , ".") . "</strong> Informado pelo Usuário</p>";

                $int = (int) $dec;
                $fra = $dec - $int;

                echo "<p> <ul> <l1> A parte inteira do Número é: " .number_format($int, 0, "," , "."). "</li></p>";

                echo "<p><l1>A parte Decimal do Número é: " .number_format($fra, 3, "," , "."). "</li></p>";

            ?>
        
        </section>
        <button onclick="javascript:history.go(-1)">voltar</button>
    </main>
</body>
</html>