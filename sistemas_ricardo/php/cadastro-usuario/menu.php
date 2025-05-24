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
        case 1: cadastrousuario();
        break;
        case 2: listarTodosUsuarios();
        break;
        case 3:

        case 4:

        case 5:

        default:

    }
}

?>