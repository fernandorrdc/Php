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
        $ini = date("m-d-y" , strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$ini.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao =  $dados["value"][0]["cotacaoCompra"];

        $conv = $valor / $cotacao;
        //var_dump($dados);
        

        echo "convertendo R$ " . number_format($valor,2) . " Em US$ " . number_format($conv,2);
        echo "<p>a cotação de hoje pelo banco cenral é:<strong> $cotacao </strong></p>";
        ?>
        
    </main>
        <!--<a href="d3.html">voltar</a>-->
        <button onclick="window.history.back()">Voltar</button>
    </Section>
    
</body>
</html>