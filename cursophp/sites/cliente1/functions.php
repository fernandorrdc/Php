<?php 

$server = 'localhost';
$db_usu ='root';
$db_senha = '';
$db_nome ='projeto_admin';
//conexão com banco de dados
$seliga = mysqli_connect($server, $db_usu, $db_senha, $db_nome);//nessa ordem

function login($seliga){

    if (isset($_POST['acessar']) and !empty($_POST['email']) and !empty($_POST['senha'])) {//só será enviado se email e senha não estiver vazio, CADASTRO.PHP

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);//Só é enviado se for preenchido com formato de email.
        $senha = sha1($_POST['senha']);//criptografia sha1
        $query = "SELECT * FROM usuarios where email = '$email' AND senha = '$senha'";
        $executar = mysqli_query($seliga, $query);
      echo $retorno = mysqli_fetch_assoc($executar);

        if (!empty($retorno['email'])) {
            //echo "Bem vindo!" .$retorno['nome'];
            session_start();
            //so posso criar variaveis de sessão depois de start uma session
            $_SESSION['nome'] = $retorno['nome'];
            $_SESSION['id'] = $retorno['id'];
            $_SESSION['ativa'] = true;
            //chegou até aqui!, mandar direto para painel adm
            header("location: index.php");
        }else {
            echo "<script> alert('Usuário ou Senha invalido !')</script>";
        }
    }

}

function logout (){
    session_start();
    session_unset();//limpar cach
    session_destroy();//função que desloga
    header("location:login.php");//voltar para tela login

}
/* seleciona a busca np BD -apenas Id */
function pesq($seliga, $tabela, $id){
    $query = "SELECT * from $tabela where id =" . (int) $id; 
    $executar = mysqli_query($seliga, $query);
    $retorno  = mysqli_fetch_assoc($executar);
    return $retorno;   

}
/* seleciona a busca np BD -apenas Id */
function buscar($seliga, $tabela, $where = 1, $order = ""){
    if(!empty($order)){
        $order = "ORDER BY $order";
    }
    
    $query = "SELECT * from $tabela where $where $order"; 
    $executar = mysqli_query($seliga, $query);
    $retornos  = mysqli_fetch_all($executar, MYSQLI_ASSOC);
    return $retornos;  
    }

 /* Inseri novo Usuário*/   
function inserirUsuarios($seliga){

    if (isset($_POST['cadastrar']) AND !empty($_POST['email']) AND !empty($_POST['senha'])){
        $erros = array();
        $email = filter_input(INPUT_POST,"email", FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($seliga, $_POST['nome']);
        $senha = sha1($_POST['senha']);

        if ($_POST['senha'] != $_POST['repetesenha']) {
            $erros[] = "Senhas não conferem !";
        }

        $queryEmail = "SELECT email FROM usuarios WHERE email ='$email' ";
        $buscaEmail = mysqli_query($seliga, $queryEmail);
        $verifica = mysqli_num_rows($buscaEmail);//traz o número de linhas.
        
        if (!empty($verifica)) {
            $erros[] = "Email já cadastrado!";
        }
        if (empty($erros)) {
            //inserir os Usuários no BD.
            $query = "INSERT INTO usuarios (nome, email, senha, data_cad) VALUES ('$nome','$email','$senha', NOW()) ";
            $executa = mysqli_query($seliga, $query);
            
            if($executa) {
                echo "<script> alert(' Usuario inserido com sucesso!') </script>";
            }else {
                echo "<script> alert('Erro ao inserir Usuário!')</script> ";
            }
 
        }else {
            foreach ($erros as $erro){
                echo "<p> $erro </p>";
            }
        }
    
    }

}
//deleta registro da tabela
function del($seliga, $tabela, $id){

    if (!empty($id)) {
        $query = "DELETE From $tabela  WHERE id = ".(int) $id;
        $executar = mysqli_query($seliga, $query);

        }if($executar) {
        echo "<script> alert(' Registro Excluido com sucesso!') </script>";
        }else {
        echo "<script> alert('Erro ao Excluir o Registro!')</script> ";
    }
    
}
function updateUser ($seliga) {

    if (isset($_POST['atualizar']) AND !empty($_POST['email'])){
        $erros = array();
        $id = filter_input(INPUT_POST,'id', FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST,'email', FILTER_VALIDATE_EMAIL);
        $nome = mysqli_real_escape_string($seliga, $_POST['nome']);
        $senha = "";
        $data = mysqli_real_escape_string($seliga, $_POST['datacad']);

        if (empty($data)) {
            $erros[] = "preencha a data de cadastro";
        }

        if (empty($email)) {
            $erros[] = "preencha e-mail corretamente";
        }


        if (strlen($nome)<4) {
            $erros[] = "preencha Nome Completo";
        }

        if (!empty($_POST['senha'])){
            if ($_POST['senha'] == $_POST['repetesenha']) {
               $senha = sha1($_POST['senha']);
            }else{
                $erros[] = "Senhas não conferem !";
            }
        }
        $queryEmailAtual = "SELECT email from usuarios where id =$id";
        $buscaEmailAtual = mysqli_query($seliga, $queryEmailAtual);
        $retornoEmail = mysqli_fetch_assoc($buscaEmailAtual);
        
        $queryEmail = "SELECT email from usuarios where email ='$email' AND email  <> '" .$retornoEmail['email']."'"; 
        $buscaEmail = mysqli_query($seliga, $queryEmail);
        $verifica = mysqli_num_rows($buscaEmail);//tráz o número de linhas.
        
        if (!empty($verifica)) {
            $erros[] = "Email já cadastrado!";
        }
            if (empty($erros)) {
            //update usuário
            if (!empty($senha)) {
                $query = "UPDAT usuarios SET nome = '$nome', senha = '$senha, email = '$email', data_cad = '$data'
            WHERE id=" .$id;
            }else{
                $query = "UPDAT usuarios SET nome = '$nome', email = '$email', data_cad = '$data'
                WHERE id=" .$id;
            }
            $executar = mysqli_query($seliga, $query);
            if($executar) {
            echo "<script> alert(' Usuário Excluido com sucesso!') </script>";
            } else {
            echo "<script> alert('Erro ao Excluir o Usuário!')</script> ";
            }
            }else{
            foreach ($erros as $erro){
                echo "<p> $erro </p>";
        }
    }
    }
}

?>