<?php session_start(); 
$safe = isset($_SESSION['ativa']) ? true : header ("location: login.php");//operador ternário ? (então) : (senão)
include_once "functions.php"; //usar o arquivo 
inserirUsuarios($seliga);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso painel</title>
    
</head>

    <style>
* {
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    box-sizing: border-box;
    
}

/* ELEMENTOS DA INTERFACE */

body {
    background-color: #15142b;
    background-image: linear-gradient(180deg, rgb(58, 191, 169), #15142b);
    background-repeat: no-repeat;
    background-position: center center;
    background-size: cover;
    background-attachment: fixed;

    display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    justify-content: center;
    align-items: center;
}
header, main, section, article {
    max-width: 1200px;
}

header > h1 {
    color: white;
    text-shadow: 3px 3px 0px black;
}

main, section, article {
    background-color: white;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 10px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.502);
}

footer {
    display: block;
    width: 100vw;
    background-color: #291f6c;
    color: white;
    text-align: center;
    margin-top: auto;
    padding: 5px;
}

.col >img{
    width:25 px ;
    height:25 px ;
}

p {
    text-align: justify;
    line-height: 1.5em;
}

h2, h3, h4 {
    color: #372991;
    margin: 0 0 10px 0;
    text-align: center;
}

a {
    color: #15142b;
    background-color: rgba(55, 41, 145, 0.1);
    padding: 0 3px;
    font-weight: 600;
    text-decoration: none;
    border-bottom: .5px dotted #372991;
}

a:hover {
    color: #372991;
    border-bottom: 1px solid #372991;
}

/* TABELAS E LISTAS */

table {
    min-width: 400px;
    border-spacing: 0px;
    border: 0.5px solid #372991;
    margin: 10px auto;
}

table th {
    background-color: #372991;
    color: white;
    padding: 5px;
    text-align: left;
}

table td {
    padding: 5px;
}

table tr {
    background-color: rgba(55, 41, 145, 0.05);
}

table tr:nth-child(odd) {
    background-color: rgba(55, 41, 145, 0.3);
}

table.divisao {
    border: 1px solid white;
}

table.divisao td {
    background-color: white;
    padding: 20px;
    text-align: center;
    font-size: 2.5em;
}

table.divisao  tr:nth-child(1) td:nth-child(2) {
    border-bottom: 3px solid black;
    border-left: 3px solid black;
}

table.divisao tr:nth-child(2) td:nth-child(2) {
    border-left: 3px solid black;
}

table.divisao tr:nth-child(2) td:nth-child(1) {
    text-decoration: underline;
}

ul > li::marker {
    color: #372991;
}

/* ELEMENTOS DE FORMULÁRIO */

form {
    background-color: rgba(55, 41, 145, 0.2);
    padding: 15px;
    border-radius: 10px;
}

form label {
    display: block;
    width: fit-content;
    font-size: 0.8em;
    font-weight: 100;
    background-color: rgba(55, 41, 145, 0.2);
    padding: 3px 7px;
    margin-top: 10px;
    margin-bottom: 0px;
    border-radius: 5px;
}

input[type=text], [type=number], select, input[type=date], input[type=date], input[type=datetime], input[type=email], input[type=month], input[type=password], input[type=range], input[type=tel], input[type=time], input[type=week] {
    width: 50%;
    padding: 12px 20px;
    font-size: 1em;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
  
input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    
}
  
input[type=submit]:hover {
    background-color: #45a049;
}

input[type=reset] {
    width: 100%;
    background-color: #eb9903;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #c27013;
}

input[type=button], button {
    width: 3vw;
    background-color: #372991;
    font-size: 1em;
    color: white;
    padding: 10px 20px;
    margin: 5px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button]:hover, button:hover {
    background-color: #291f6c;
}

fieldset {
    border: 0.5px dotted #372991;
}

fieldset > legend {
    font-size: 1em;
    font-weight: 100;
    background-color: rgba(55, 41, 145, 0.2);
    padding: 3px 7px;
    border-radius: 5px;
}

input[type=radio] + label, input[type=checkbox] + label {
    display: inline-block;
    font-size: 1em;
    background-color: rgba(0, 0, 0, 0);
}


    </style>

<body>
    
      <header>
            <h1>
              Seja Bem vindo!
            </h1>
            <?php if ($safe) { ?>
                <h3><?php echo $_SESSION['nome'];?></h3>
                
                <?php } ?> 
                <nav>
                    <p>
                        <div>
                            <a href="index.php">Painel</a>
                            <a href="useres.php">Usuários</a>
                            <a href="logout.php">Sair</a>
                        </div>
                    </p>
                </nav>

               
            </header>
    
    </div>

      <form action="" method="post">
      
      <fieldset>
               <legend>Cadasto de Usuários</legend>
               
               <input type="text" name="nome" id="inome" placeholder="Nome" autocomplete="name">
               
               <input type="email" name="email" id="iemail" placeholder="E-mail" required autocomplete="off">
              
               <input type="password" name="senha" id="isenha" placeholder="Senha"  autocomplete="new-password">
               
               <input type="password" name="repetesenha" id="irepetesenha" placeholder="repita a senha"  autocomplete="new-password">
               <input type="submit" nome="cadastrar" value="cadastrar">
      </fieldset>
      
      </form>

        <section>
        <?php 
               $tabela = "usuarios";
               $order = "nome";
               $usuarios = buscar($seliga, $tabela, 1, $order);
               
               
               if (isset($_GET['id'])) { ?>
                  <h3>Usuário vai ser apagado <?php echo $_GET['id'];?></h3>

                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                    <input type="submit" name="deletar" value="deletar">

                  </form>
                  
                <?php }?>
               <?php 

               if (isset($_POST['deletar'])){
                    if ($_SESSION['id'] != ($_GET['id'])) {
                        del($seliga, 'usuarios', $_POST['id']);
                    }else{
                        echo "Não é permitido se Apagar, sem autorização!";
                    }
                    
               }
               
               ?>

               <?php 

                if (isset($_POST['cadastrar'])) {
                
                }
                ?>

        <div class = "conteudo">
                    <table>
                        <thead>
                            <tr>
                                <th>Id :</th>
                                <th>Nome:</th>
                                <th>E-mail:</th>
                                <th>Data Cadastro :</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php foreach ($usuarios as $usuarios) :?>
                                 <tr>
                                    <td><?php echo $usuarios['id']?></td>
                                    <td><?php echo $usuarios['nome']?></td>
                                    <td><?php echo $usuarios['email']?></td>
                                    <td><?php echo $usuarios['data_cad']?></td>
                                    <td>
                                        <a href="useres.php?id=<?php echo $usuarios['id']?>">Excluir</a>

                                        <a href="edit_useres.php?id=<?php echo $usuarios['id']?>">atualizar</a>

                                    </td>
                                 </tr>       
                                    
                                <?php endforeach;?>
                        </tbody>
                        
                    </table>
                               
        </section>
                
    
    
</body>
</html>