<?php

require 'user.php';

function exibemenu()
{
    echo "----- SISTEMA CRIATIVA DIGITAL ----- \n";
    echo "[1] Cadastro \n";
    echo "[2] Login \n";
}

function processaopcao()
{
    $op = readline("Escolha uma opção: ");

    switch($op){
        case 1: 
            echo "CADASTRO DE USUÁRIO: \n";
            cadastrarUsuario();
            break;
        case 2: 
            echo "LOGIN: \n";
            login();
            break;
        default:
            echo "Opção inválida, tente novamente. \n";
    }
}

exibemenu();
processaopcao();

?>