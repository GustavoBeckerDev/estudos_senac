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
    $result = cadastrar($db, $query, $dados);
    if (!$result){
        echo "Erro ao cadastrar usuário, tente novamente. \n";
    }
        echo "Usuário cadastrado com sucesso. \n";
    desconectar($db);
}

function listarUsuarios()
{
    $query = 'SELECT * FROM usuario';
    $db = conectar();
    $listaUsuarios = listar($db, $query);
    desconectar($db);
    foreach($listaUsuarios as $usuario){
        echo "ID : " . $usuario['id'] . 
        ", LOGIN: " . $usuario['login'] . 
        ", NOME: " . $usuario['nome'] . 
        ", EMAIL: " . $usuario['email'] . 
        ", FUNCAO: " . $usuario['funcao'] . ". \n";
    }
}

function editarUsuario()
{
    listarUsuarios();
    echo "Digite o ID do usuário que deseja editar: ";
    $id = intval(trim(readline()));

    echo "Informe os novos dados.\n";
    $novologin = readline("Informe o novo login: ");
    $novasenha = sha1(readline("Informe a nova senha: "));
    $novonome = readline("Informe o novo nome: ");
    $novoemail = readline("Informe o novo email: ");
    $novafuncao = readline("Informe a nova função: ");

    $query = "UPDATE `usuario` SET 
        `login` = '$novologin', 
        `senha` = '$novasenha', 
        `nome` = '$novonome', 
        `email` = '$novoemail', 
        `funcao` = '$novafuncao'
        WHERE `id` = $id";

    $db = conectar();
    $resultado = editar($db, $query);

    if (!$resultado) {
        echo "ERRO NA EDIÇÃO DE USUÁRIO, TENTE NOVAMENTE. \n";
    } else {
        echo "USUÁRIO EDITADO COM SUCESSO. \n";
    }

    desconectar($db);
}

?>