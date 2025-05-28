<?php

function conectar ()
{
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'cadastro';
$db = mysqli_connect($host, $username, $password, $dbname);
if (!$db){
    die ("Não foi possível conectar.");
}
return $db;
}

function desconectar($db)
{
    mysqli_close($db);
}

function cadastrar($db, $query, $dados)
{
    $result = mysqli_execute_query($db, $query, $dados);
    if (!$result){
        return "Error ao inserir. \n";
    }
    return $result;
}

function listar($db, $query)
{
    $result = mysqli_execute_query($db,$query);
    $array = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $array;
}

function buscarUser($db, $query, $parametro)
{
    $result = mysqli_execute_query($db, $query, $parametro);
    $array = mysqli_fetch_array($result, MYSQLI_NUM);
    return $array;
}

function editar($db, $query, $dados)
{
    $result = mysqli_execute_query($db, $query, $dados);
    if (!$result){
        return "Error ao inserir. \n";
    }
    return $result; 
}

function excluir($db, $query, $dados)
{
    $result = mysqli_execute_query($db, $query, $dados);
    if (!$result){
        return "Error ao inserir. \n";
    }
    return $result;
}
?>