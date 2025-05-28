<?php

require 'estilos.php';
require 'usuario.php';
require 'produto.php';

function exibemenu()
{
    limparTela();
    titulo("🚀 SISTEMA DE GESTÃO    ");
    
    echo cor("┌─────────────────────────────────────────┐", 'azul') . "\n";
    echo cor("│", 'azul') . negrito(centralizarTexto("MENU PRINCIPAL", 39)) . cor("  │", 'azul') . "\n";
    echo cor("├─────────────────────────────────────────┤", 'azul') . "\n";
    echo cor("│", 'azul') . "  [1] Cadastrar usuário               " . cor("   │", 'azul') . "\n";
    echo cor("│", 'azul') . "  [2] Listar usuário                  " . cor("   │", 'azul') . "\n";
    echo cor("│", 'azul') . "  [3] Editar usuário                  " . cor("   │", 'azul') . "\n";
    echo cor("│", 'azul') . "  [4] Excluir usuário                 " . cor("   │", 'azul') . "\n";
    echo cor("│", 'azul') . "  [5] Cadastrar produto               " . cor("   │", 'azul') . "\n";
    echo cor("│", 'azul') . "  [0] Sair                            " . cor("   │", 'azul') . "\n";
    echo cor("└─────────────────────────────────────────┘", 'azul') . "\n\n";
    
    echo cor("➤ ", 'amarelo') . "Escolha uma opção: ";
    $op = readline("");
    return $op;
}

function processaopcao($op)
{
    switch($op){
        case 1: 
            echo "SESSÃO DE CADASTRO DE USUÁRIO: \n";
            cadastrarusuario();
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
        case 0: 
            echo "Saindo do programa... \n";
            exit;
        default:
            echo "Opção inválida, tente novamente. \n";
    }
}

?>