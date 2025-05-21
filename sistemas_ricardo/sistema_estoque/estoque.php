<?php

$estoque = [];
$dataatual = new DateTime("2025-05-10");

function menu() {
    echo "\n===== MENU ESTOQUE =====\n";
    echo "1. Listar produtos\n";
    echo "2. Adicionar produto\n";
    echo "3. Alterar produto\n";
    echo "4. Remover produto\n";
    echo "0. Sair\n";
    echo "Escolha uma opção: ";
}

function listar($estoque) {
    if (empty($estoque)) {
        echo "-----------------------------------\n";
        echo "---------- Estoque vazio ----------\n";
        echo "-----------------------------------\n";
        return;
    }

    echo "--------- PRODUTOS NO ESTOQUE ---------\n";
    foreach ($estoque as $id => $produto) {
        echo "ID: $id | Nome: {$produto['nome']} | Qtd: {$produto['quantidade']} | Valor: R$ {$produto['valor']} | Validade: " . $produto['validade']->format('d/m/Y') . "\n";
    }
}

function adicionar(&$estoque) {
    global $dataatual;
    $nome = readline("Nome do produto: ");
    $quantidade = (int) readline("Quantidade: ");
    $valor = (float) readline("Valor (ex: 10.50): ");
    $validadestr = readline("Data de validade Ex: AAAA-MM-DD: ");
    $validade = new DateTime($validadestr);

    if ($validade <= $dataatual){
        echo "Produto com validade vencida ou muito próxima, não pode ser adicionado ao estoque. \n";
    } else {
    $estoque[] = ['nome' => $nome, 'quantidade' => $quantidade, 'valor' => $valor, 'validade' => $validade];
    echo "Produto adicionado com sucesso!\n";
    }
}

function alterar(&$estoque) {
    global $dataatual;
    listar($estoque);
    $id = (int) readline("Informe o ID do produto que deseja alterar: ");
    if (!isset($estoque[$id])) {
        echo "Produto não encontrado.\n";
        return;
    }
    $estoque[$id]['nome'] = readline("Novo nome: ");
    $estoque[$id]['quantidade'] = (int) readline("Nova quantidade: ");
    $estoque[$id]['valor'] = (float) readline("Novo valor: ");
    $validadestr = readline("Nova validade (AAAA-MM-DD): ");
    $validade = new DateTime($validadestr);

    if ($validadestr <= $dataatual){
        echo "Validade vencida, não pode ser adicionada. \n";
    }
    else {
    $estoque[$id]['validade'] = $validade;
    echo "Produto alterado com sucesso!\n";
    }
}

function remover(&$estoque) {
    listar($estoque);
    $id = (int) readline("Informe o ID do produto que deseja remover: ");
    if (!isset($estoque[$id])) {
        echo "Produto não encontrado.\n";
        return;
    }

    unset($estoque[$id]);
    echo "Produto removido com sucesso!\n";
}

do {
    menu();
    $opcao = (int) readline();

    switch ($opcao) {
        case 1:
            listar($estoque);
            break;
        case 2:
            adicionar($estoque);
            break;
        case 3:
            alterar($estoque);
            break;
        case 4:
            remover($estoque);
            break;
        case 0:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção inválida!\n";
    }
} while ($opcao !== 0);

?>
