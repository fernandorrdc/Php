<!DOCTYPE html>
<html lang="Pt-Br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Para USE</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1>
            Convertendo de Real para Dolar Americano.
        </h1>
    </header>
    <Section>
    <main>
        <?php 
        $valor = $_GET["valor"];
        //var_dump($valor); 
        const DOLA = 4.82;
        $conv = $valor/DOLA;

        echo "convertendo R$ " . number_format($valor,2) . " Em US$ " . number_format($conv,2);
        ?>
        
    </main>
        <!--<a href="d3.html">voltar</a>-->
        <button onclick="window.history.back()">Voltar</button>
    </Section>
    
</body>
</html>