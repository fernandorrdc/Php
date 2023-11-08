<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobais em PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                
                setcookie("hoje","domingo", time() + 3600);


                echo "<h1>SuperGlobais GET </h1>";
                var_dump($_GET);

                echo "<h1>SuperGlobal POST</h1>";
                var_dump($_POST);

                echo "<h1>SuperGlobal REQUEST</h1>";//Junta GUET e POST em um.
                var_dump($_REQUEST);

                echo "<h1>SuperGlobal COOKIE</h1>";
                var_dump($_COOKIE); 

                echo "<h1>SuperGlobal SESSION</h1>";
                var_dump($_SESSION);

                echo "<h1>VariavelGlobal ENV</h1>";
                var_dump($_ENV);
                foreach (getenv() as $c => $v) {
                    echo "<br> $c -> $v";
                }

                echo "<h1>VariavelGlobsl SERVER </h1>";
                var_dump($_SERVER);

                echo "<h1>VariavelGlobal GLOBALS </h1>";
                var_dump($GLOBALS);

            ?>
        </pre>
        <section>
            <button onclick="javascript:history.go(-1)">voltar</button>
        </section>
        
    </main>
    
</body>
</html>