<?php

// VARIÁVEIS PARA CONEXÃO AO MYSQL E AO BANCO DE DADOS 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'subselect';

// ESTABELECE A CONEXÃO COM O BANCO DE DADOS UTILIZANDO A FUNÇÃO 'MYSQLI_CONNECT'
$conexao = mysqli_connect($host, $username, $password, $dbname);

// SE A CONEXÃO NÃO FOR ESTABELECIDA O SISTEMA É FECHADO COM UMA MENSAGEM.
if (!$conexao){
    die ("Não foi possível conectar.");
}

// CRIA SCRIP SQL 
$sql = "select * from funcionario";

//
$resultado = mysqli_query($conexao, $sql) 
or die ("Não foi possível conectar. ");

if (mysqli_num_rows($resultado) > 0){
    $registros = mysqli_fetch_all($resultado);
}

foreach($registros as $values){
   print_r($values);
}

?>