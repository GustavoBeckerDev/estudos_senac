<?php

// DESENVOLVA UM CONTROLE DE ESTOQUE SIMPLIFICADO. O SISTEMA DEVE ADICIONAR E REMOVER PRODUTOS, SEMPRE PREZANDO PELA CORRETUDE DOS DADOS.
// O PRODUTO DEVE CONTER NOME, QUANTIDADE E PREÇO MÉDIO.

$estoque = [];

function listar($estoque)
{
    if (empty($estoque)){
        echo "ESTOQUE VAZIO, ADICIONE PRODUTOS PARA LISTÁ-LOS. \n";
        return 0;
    }
    else {
        foreach($estoque as $id => $produto){
            echo "ID: $id | Nome do produto: {$produto['nome']} | Qtd: {$produto['quantidade']} | Preço médio: R$ {$produto['precomedio']}. \n";
        }
    }
}

function adicionar(&$estoque)
{
    echo "----- ADICIONAR PRODUTOS AO ESTOQUE -----\n";

    echo "Nome do produto: \n";
    $nome = trim(readline());
    if (!ctype_alnum($nome)){
        echo "Dígitos inválidos, digite apenas caracteres alfanuméricos. \n";
    }
    else {
        $estoque[] = ['nome' => $nome];
    }

    echo "Quantidade: \n";
    $quantidade = trim(readline());
    if (!ctype_digit($quantidade)){
        echo "Dígitos inválidos, digite apenas números inteiros. \n";
    }
    else {
        $estoque[] = ['quantidade' => $quantidade];
    }

    echo "Valor unitário: \n";
    $valorunitario = trim(readline());
    if (!ctype_digit($valorunitario)){
        echo "Dígitos inválidos, digite apenas números. \n";
    }
    else {
        $precomedio = ($valorunitario / $quantidade);
        $estoque[] = ['precomedio' => $precomedio];
    }

}

function remover(&$estoque)
{
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
echo "MENU DE OPÇÕES: \n";
echo "1 - LISTAR ESTOQUE. \n";
echo "2 - ADICIONAR PRODUTOS. \n";
echo "3 - REMOVER PRODUTO. \n";
echo "4 - SAIR. \n";

$op = trim(readline("Escolha uma opção: "));

switch($op){
    case 1: 
        listar($estoque);
        break;
    case 2:
        adicionar($estoque);
        break;
    case 3:
        remover($estoque);
        break;
    case 4:
        echo "SAINDO DO PROGRAMA...  \n";
        exit;
}
} while ($op !== 4);

?>