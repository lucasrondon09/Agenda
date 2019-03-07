<?php

//Função de conexão com banco de dados

$user = 'root';
$host = 'localhost';
$pass = '';
$db   = 'agenda';


$con = new mysqli($host, $user, $pass, $db);

if(mysqli_connect_error()){
    die("Não foi possível conectar ao bando de dados, verifique com o desenvolvedor! Erro:".mysqli_connect_error());
}

?>