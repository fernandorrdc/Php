<?php

class NewsLetter
{
    public function cadastrarEmail($email) {

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) :
            throw new Exception("Este email é inválido", 121);
        else:
            echo "email cadastrado com sucesso!";
        endif;
            
    }
}

$newletter =new NewsLetter();

try {
    $newletter->cadastrarEmail("contato@");
} catch (Exception $e) {
    echo "Mensagem: ". $e->getMessage()."<br>";
    echo "Linha : " .$e->getLine()."<br>";
    echo "Arquivo: " .$e->getFile()."<br>";
    echo "Erro de Código: ". $e->getCode()."<br>";
}