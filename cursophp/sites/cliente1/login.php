<?php require_once "functions.php"; ?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Login</h1>
    </header>
    <main>
        <section>
            <form method="POST" action="login.php">
                <fieldset>
                    <legend>Painel do usuário</legend>

                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="iemail" placeholder="Seu e-mail" required><br>
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha" placeholder="sua senha" required><br>
                        <input type="submit" value="acessar" id="iacessar" name="acessar"><br>
                        <button onclick="javascript:history.go(-1)">voltar</button>

                </fieldset>
            </form>
            <?php 

                if (isset($_POST['acessar'])) {
                    login ($seliga);  
               
                }
    
            ?>
        </section>
    </main>
</body>
</html>