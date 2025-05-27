<?php

require 'usuario.php';
require 'produto.php';

function exibemenu()
{
    echo "------------------------\n";
    echo "Escolha uma opção desejada: \n";
    echo "1 - Cadastrar usuário. \n";
    echo "2 - Listar usuário. \n";
    echo "3 - Editar usuário. \n";
    echo "4 - Excluir usuário. \n";
    echo "5 - Cadastrar produto. \n";
    echo "------------------------\n";
    $op = readline("Informe uma opção: ");
    return $op;
}

function processaopcao($op)
{
    switch($op){
        case 1: 
            echo "SESSÃO DE CADASTRO DE USUÁRIO: \n";
            cadastrousuario();
            break;
        case 2: 
            echo "LISTANDO TODOS OS USUÁRIOS: \n";
            listarUsuarios();
            break;
        case 3:
            echo "SESSÃO DE EDIÇÃO DADOS DOS USUÁRIOS: \n";
            editarUsuario();
            break;
        case 4:
            echo "SESSÃO PARA EXCLUIR USUÁRIO. \n";
            excluirUsuario();
            break;
        case 5: 
            echo "Saindo do programa... \n";
            exit;
        default:
            echo "Opção inválida, tente novamente. \n";
    }
}

?>