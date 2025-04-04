<?php

$server = "localhost";
$userName = "root";
$password = "";
$dbName = "crud";


//conexão com DB sql

$connect = mysqli_connect($server , $userName, $password, $dbName) ;

if (mysqli_connect_error()) {
    echo "falha na conexão!".mysqli_connect_error();

}