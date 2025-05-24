<?php

require_once 'db.php';

function cadastrousuario()
{
    echo "Informe os dados. \n";
    $dados[] = readline("Informe o login: ");
    $dados[] = sha1(readline("Informe a senha: "));
    $dados[] = readline("Informe o nome: ");
    $dados[] = readline("Informe o email: ");
    $dados[] = readline("Informe a sua função: ");
    $query = "INSERT INTO usuario (login, senha, nome, email, funcao) values (?,?,?,?,?)";
    $db = conectar();
    inserir($db, $query, $dados);
    desconectar($db);
}

function listarTodosUsuarios()
{
    $query = 'SELECT * FROM usuario';
    $db = conectar();
    $listaUsuarios = buscar($db, $query);
    desconectar($db);
    foreach($listaUsuarios as $usuario){
        echo "|" . $usuario['nome'] . "|" . $usuario['email'] . "|" . $usuario['funcao'] . "| \n";
    }
}

?>