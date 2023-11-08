<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia e noite</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Dia e Noite!
        </h1>
    </header>
    <main>
        <section>
            <?php 
            
            date_default_timezone_set('America/Sao_Paulo');
            $hoje = date("d/m/Y");
            $agora = date("H:i");
            $hora = date ("H");

            if ($hora <6 or $hora >18) 
                echo "<img src ='noite.jpg'><br>";

            else
                echo "<img src='dia.jpg'><br>";
                echo "<br> hoje é dia <strong>" .$hoje. " é agora é :" .$agora. "</strong>h";
            ?>
        </section>
    </main>
    
</body>
</html>