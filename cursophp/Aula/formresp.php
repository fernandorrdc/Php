<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário retroalimentado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $vl1 = $_GET['v1'] ?? 0;
        $vl2 = $_GET['v2'] ?? 0;
    ?>
    <header>
        <h1>Soma entre 2 Números</h1>
    </header>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="iv1" value="<?=$vl1?>" step="0.01">

            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="iv2" value="<?=$vl2?>" step="0.01">

            <input type="submit" value="somar">

            
        </form>
        <section id="result">

            <?php 

            $total = $vl1 + $vl2;
            print "<p>A soma de $vl1 e $vl2 é <strong> $total</strong></p>";

            ?>
          
        </section>
    </main>
</body>
</html>