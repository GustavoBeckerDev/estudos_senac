<?php

$estoque = [
    ['cod' => '001', 'nome' => 'Teclado Mecânico', 'quantidade' => 10, 'precomedio' => 150.00, 'total' => 150.00 * 10],
    ['cod' => '001', 'nome' => 'Teclado Mecânico', 'quantidade' => 8,  'precomedio' => 145.00, 'total' => 145.00 * 8],
    ['cod' => '001', 'nome' => 'Teclado Mecânico', 'quantidade' => 12, 'precomedio' => 155.00, 'total' => 155.00 * 12],
    ['cod' => '001', 'nome' => 'Teclado Mecânico', 'quantidade' => 5,  'precomedio' => 140.00, 'total' => 140.00 * 5],
    ['cod' => '001', 'nome' => 'Teclado Mecânico', 'quantidade' => 7,  'precomedio' => 148.00, 'total' => 148.00 * 7],

    ['cod' => '002', 'nome' => 'Mouse Gamer', 'quantidade' => 20, 'precomedio' => 80.00, 'total' => 80.00 * 20],
    ['cod' => '002', 'nome' => 'Mouse Gamer', 'quantidade' => 15, 'precomedio' => 75.00, 'total' => 75.00 * 15],
    ['cod' => '002', 'nome' => 'Mouse Gamer', 'quantidade' => 10, 'precomedio' => 78.00, 'total' => 78.00 * 10],
    ['cod' => '002', 'nome' => 'Mouse Gamer', 'quantidade' => 8,  'precomedio' => 77.00, 'total' => 77.00 * 8],
    ['cod' => '002', 'nome' => 'Mouse Gamer', 'quantidade' => 5,  'precomedio' => 82.00, 'total' => 82.00 * 5],

    ['cod' => '003', 'nome' => 'Monitor 24"', 'quantidade' => 8,  'precomedio' => 600.00, 'total' => 600.00 * 8],
    ['cod' => '003', 'nome' => 'Monitor 24"', 'quantidade' => 5,  'precomedio' => 620.00, 'total' => 620.00 * 5],
    ['cod' => '003', 'nome' => 'Monitor 24"', 'quantidade' => 10, 'precomedio' => 610.00, 'total' => 610.00 * 10],
    ['cod' => '003', 'nome' => 'Monitor 24"', 'quantidade' => 7,  'precomedio' => 605.00, 'total' => 605.00 * 7],
    ['cod' => '003', 'nome' => 'Monitor 24"', 'quantidade' => 6,  'precomedio' => 615.00, 'total' => 615.00 * 6],

    ['cod' => '004', 'nome' => 'Headset USB', 'quantidade' => 12, 'precomedio' => 120.00, 'total' => 120.00 * 12],
    ['cod' => '004', 'nome' => 'Headset USB', 'quantidade' => 9,  'precomedio' => 118.00, 'total' => 118.00 * 9],
    ['cod' => '004', 'nome' => 'Headset USB', 'quantidade' => 7,  'precomedio' => 122.00, 'total' => 122.00 * 7],
    ['cod' => '004', 'nome' => 'Headset USB', 'quantidade' => 10, 'precomedio' => 115.00, 'total' => 115.00 * 10],
    ['cod' => '004', 'nome' => 'Headset USB', 'quantidade' => 8,  'precomedio' => 119.00, 'total' => 119.00 * 8],
];

function listarAgrupada($estoqueFiltrado)
{
    echo "\n---------- LISTAGEM AGRUPADA ----------\n";
    $agrupado = [];

    foreach ($estoqueFiltrado as $produto) {
        $chave = $produto['cod'] . '-' . $produto['nome'];
        if (!isset($agrupado[$chave])) {
            $agrupado[$chave] = [
                'cod' => $produto['cod'],
                'nome' => $produto['nome'],
                'quantidade' => 0,
                'total' => 0
            ];
        }
        $agrupado[$chave]['quantidade'] += $produto['quantidade'];
        $agrupado[$chave]['total'] += $produto['total'];
    }

    foreach ($agrupado as $produto) {
        $precoMedio = $produto['total'] / $produto['quantidade'];
        echo "COD: {$produto['cod']} | Nome: {$produto['nome']} | Quantidade Total: {$produto['quantidade']} | Preço Médio: R$ " . number_format($precoMedio, 2, ',', '.') . " | Valor Total: R$ " . number_format($produto['total'], 2, ',', '.') . "\n";
    }
}

function listarDetalhada($estoqueFiltrado)
{
    echo "\n---------- LISTAGEM DETALHADA ----------\n";
    foreach ($estoqueFiltrado as $id => $produto) {
        echo "IDX: $id | COD: {$produto['cod']} | Nome: {$produto['nome']} | Qtd: {$produto['quantidade']} | Preço Médio: R$ " . number_format($produto['precomedio'], 2, ',', '.') . " | Total: R$ " . number_format($produto['total'], 2, ',', '.') . "\n";
    }
}

function listar($estoque)
{
    uasort($estoque, function($a, $b) {
    $codCompare = $a['cod'] <=> $b['cod'];
    return $codCompare;
    });

    echo "\n1 - Listar todo o estoque\n";
    echo "2 - Buscar por código\n";
    $op = trim(readline("Escolha: "));

    $estoqueFiltrado = [];

    if ($op == '1') {
        $estoqueFiltrado = $estoque;
    } elseif ($op == '2') {
        $cod = trim(readline("Informe o código do produto: "));
        foreach ($estoque as $produto) {
            if (strtolower(trim($produto['cod'])) === strtolower(trim($cod))){
                $estoqueFiltrado[] = $produto;
            }
        }
        if (empty($estoqueFiltrado)) {
            echo "Nenhum produto com o código '$cod' foi encontrado.\n";
            return;
        }
    } else {
        echo "Opção inválida.\n";
        return;
    }

    listarAgrupada($estoqueFiltrado);
    listarDetalhada($estoqueFiltrado);
}

function adicionar(&$estoque)
{
    echo "----- ADICIONAR PRODUTOS AO ESTOQUE -----\n";
    $nome = "";
    $cod = trim(readline("Código do produto: "));

    foreach ($estoque as $produto) {
        if ($cod == $produto['cod']) {
            $nome = $produto['nome'];
            break;
        }
    }

    if ($nome === "") {
        $nome = trim(readline("Nome do produto: "));
    }

    $quantidade = readline("Quantidade: ");
        if (!is_numeric($quantidade) || $quantidade <= 0) {
        echo "Quantidade inválida.\n";
        return;
        }
    $quantidade = (int) $quantidade;

    $valorunitario = readline("Valor unitário: ");
    if (!is_numeric($valorunitario) || $valorunitario <= 0) {
        echo "Valor inválido.\n";
        return;
    }
    $valorunitario = floatval($valorunitario);

    $total = $quantidade * $valorunitario;
    $precomedio = $total / $quantidade;

    $estoque[] = ['cod' => $cod, 'nome' => $nome, 'quantidade' => $quantidade, 'precomedio' => $precomedio, 'total' => $total];
    echo "Produto adicionado com sucesso!\n";
}

function remover(&$estoque)
{
    listar($estoque);
    $id = (int) readline("Informe o ID do produto que deseja remover: ");
    if (!isset($estoque[$id])) {
        echo "Produto não encontrado.\n";
        return;
    }

    echo "Deseja realmente remover este item? (s/n): ";
    $confirm = strtolower(trim(readline()));
    if ($confirm !== 's') {
        echo "Remoção cancelada.\n";
        return;
    }

    unset($estoque[$id]);
    $estoque = array_values($estoque);
    echo "Produto removido com sucesso!\n";
}

do {
    echo "\n----- MENU DE OPÇÕES -----\n";
    echo "1 - LISTAR ESTOQUE\n";
    echo "2 - ADICIONAR PRODUTO\n";
    echo "3 - REMOVER PRODUTO\n";
    echo "4 - SAIR\n";

    $op = trim(readline("Escolha uma opção: "));

    switch ($op) {
        case '1':
            listar($estoque);
            break;
        case '2':
            adicionar($estoque);
            break;
        case '3':
            remover($estoque);
            break;
        case '4':
            echo "Saindo do programa...\n";
            break;
        default:
            echo "Opção inválida.\n";
    }
} while ($op !== '4');

?>