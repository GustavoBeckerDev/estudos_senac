<?php

require_once 'db.php';

function cadastrarUsuario()
{
    echo "Informe os dados\n";
    $users[]=readline("Informe o Usuário:\n");
    $users[]=readline("Informe o Email:\n");
    $users[]=sha1(readline("Informe o Senha:\n"));
    
    $query = "INSERT INTO users (usuario,email,senha) VALUES (?,?,?)";
    $db = conectar();

    $result = mysqli_execute_query($db, $query, $users);
    if (!$result){
        return "Error ao inserir. \n";
    }

    desconectar($db);

    if($result){
        echo "--- Usuário cadastrado com sucesso ---\n";
    } else {
        echo "--- Erro ao cadastrar usuário, tente novamente ---\n";
    }

}

function login(){

    






}







?>