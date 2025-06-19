<?php

function conectar (){

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'testes';

$db = mysqli_connect($host, $username, $password, $dbname);
    if (!$db){
        die ("Não foi possível conectar.");
    }
    echo "Passou aqui. \n";
    return $db;
}

function desconectar($db)
{
    mysqli_close($db);
}

?>