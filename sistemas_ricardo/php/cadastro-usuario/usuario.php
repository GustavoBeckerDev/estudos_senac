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
    $listaUsuarios = buscar($db, $query);
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
    echo "Editar usuário: \n";
    echo "Qual usuário deseja alterar? \n";
    $login = readline("Informe o login: ");
    $usuario = buscarUsuario($login);
    for($i=1; $i<count($usuario); $i++){
        echo "[$usuario[$i]]";
        $valor = readline(">");
        if (!$valor==""){
            $usuario[$i] = $valor;
        }
        $valores[] = $usuario[$i];
    }
    $valores[] = $usuario[0];
    print_r($valores);
    $db = conectar();
    $query = "UPDATE usuario SET login=?, senha=?, nome=?, email=?, funcao=? WHERE id=?";
    editar($db, $query, $usuario);
    desconectar($db);
}

function buscarUsuario($valor)
{
    $query = "SELECT * FROM usuario WHERE login=?";
    $db = conectar();
    $usuario = buscarUnico($db, $query, array($valor));
    desconectar($db);
    if (!$usuario){
        echo "Login não encontrado. \n";
        return 0;
    }
    return $usuario;
}

function excluirUsuario()
{
    echo "Qual usuário deseja excluir? \n";
    $login[] = readline("Informe o login: ");
    $query = "DELETE FROM usuario WHERE login=?";
    $db = conectar();
    $result = excluir($db, $query, $login);
    desconectar($db);
    if ($result){
        echo "Registro excluído com sucesso \n";
    }
    else {
        echo "Erro ao excluir. \n";
    }
}

?>