<?php 

session_start();
require_once "functions.php"; //usar o arquivo 

?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de clientes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <h1>Cadastro de Clientes</h1>
    </header>
    <main>
        <section>
        <?php 
            inserirUsuarios($seliga);  
        ?>
        <form action="" method="POST" autocomplete="on">
                
                <fieldset>
                         <legend>Cadasto de Usuários</legend>
                         <label for="nome">Nome:</label>
                         <input type="text" name="nome" id="inome" placeholder="Nome">
                         <label for="email">*E-mail:</label>
                         <input type="email" name="email" id="iemail" placeholder="E-mail" required>
                         <label for="senha">*Senha:</label>
                         <input type="password" name="senha" id="isenha" placeholder="Senha" required>
                         <label for="repetesenha">*Repetir:</label>
                         <input type="password" name="repetesenha" id="irepetesenha" placeholder="repita a senha" required>
                         <input type="submit" nome="cadastrar" value="cadastrar">
                </fieldset>
 
                </form>
        </section>
       
    </main>
</body>
</html>