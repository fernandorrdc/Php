<?php

namespace App\Model;

class Conexao
{

    private static $instance;

    public static function getConn()
    { //caso exista uma instacia ok, senão ele cria uma.

        if (!isset(self::$instance)) { //se não existir uma instancia ele cria uma.
            self::$instance = new \PDO('mysql:host=localhost;dbname=pdo;charset=utf8', 'root', '');
        }
        return self::$instance;
    }
}
