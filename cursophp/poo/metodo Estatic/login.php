<?php

class Login{

    public static $user;

    public static function verificarLogin() {
        echo "O Usuário: " .self::$user. " está Logado!";
    }

    public function logaut() {
        echo "usuario  deslogado!";
    }
}

Login::$user=" Admin ";
Login::verificarLogin();
echo "<hr>";
$login = new Login();
$login->logaut();