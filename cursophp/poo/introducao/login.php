<?php

class Login{

    // Atributos
    private $usuario;
    private $senha;
    
    // Construtor
    public function __construct($usuario, $senha){
        $this->setUsuario($usuario);
        $this->setSenha ($senha);
    }
    //metodos get e set
    public function getUsuario(){
        return $this->usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function autenticar(){
        // Aqui você pode adicionar a lógica de autenticação, como verificar o banco de dados
        if ($this->usuario == "admin" && $this->senha == "1234") {
            echo "logado com sucesso!";
        } else {
            echo "Dados incorretos!";
        }
    }
}
$logar = new Login("admin", "1234");// Cria um novo objeto da classe Login

//$logar->setUsuario("admin");// Define o usuário
//$logar->setSenha("1234");// Define a senha
$logar->autenticar();// Chama o método de autenticação
echo "<br>";
echo $logar->getUsuario();// Chama o método getUsuario
echo "<br>";