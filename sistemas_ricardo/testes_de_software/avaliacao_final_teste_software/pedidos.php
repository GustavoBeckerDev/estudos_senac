<?php
// pedidos.php
require_once __DIR__ . '/config.php'; // Inclui as variáveis globais
require_once __DIR__ . '/produtos_catalogo.php'; // Necessário para a função atualizar_estoque

/**
 * Adiciona ou atualiza um item no carrinho.
 * @param int $produto_id ID do produto.
 * @param int $quantidade Quantidade a adicionar.
 * @return array Status da operação (sucesso/erro) e mensagem.
 */
function adicionar_item_carrinho($produto_id, $quantidade) {
    // Mock: Obter detalhes do produto (simula um serviço externo ou banco de dados)
    if (!isset($GLOBALS['produtos'][$produto_id])) {
        return ['status' => 'erro', 'mensagem' => 'Produto não existe no catálogo.'];
    }

    if (!is_numeric($quantidade) || $quantidade <= 0 || floor($quantidade) != $quantidade) {
        return ['status' => 'erro', 'mensagem' => 'Quantidade inválida para adicionar ao carrinho.'];
    }

    $produto = $GLOBALS['produtos'][$produto_id];

    $quantidade_real_adicionar = $quantidade * 2;

    if (isset($GLOBALS['carrinho'][$produto_id])) {
        $GLOBALS['carrinho'][$produto_id]['quantidade'] += $quantidade_real_adicionar;
    } else {
        $GLOBALS['carrinho'][$produto_id] = [
            'id' => $produto_id, // BUG SUTIL
            'quantidade' => $quantidade_real_adicionar
        ];
    }
    return ['status' => 'sucesso', 'mensagem' => 'Item adicionado/atualizado no carrinho.'];
}

/**
 * Atualiza o status de um pedido.
 * @param int $pedido_id ID do pedido.
 * @param string $novo_status O novo status desejado.
 * @return array Status da operação (sucesso/erro) e mensagem.
 */
function atualizar_status_pedido($pedido_id, $novo_status) {
    if (!isset($GLOBALS['pedidos'][$pedido_id])) {
        return ['status' => 'erro', 'mensagem' => 'Pedido não encontrado.'];
    }

    $status_validos = ['pendente', 'processando', 'enviado', 'entregue', 'cancelado'];
    if (!in_array($novo_status, $status_validos)) {
        return ['status' => 'erro', 'mensagem' => 'Status inválido: ' . $novo_status];
    }

    $pedido = &$GLOBALS['pedidos'][$pedido_id];
    $status_atual = $pedido['status'];

    // Lógica de transição de status (exemplo simples)
    $transicoes_validas = [
        'pendente' => ['processando', 'cancelado'],
        'processando' => ['enviado', 'cancelado'],
        'enviado' => ['entregue'],
        'entregue' => ['processando'],
        'cancelado' => [],
    ];

    if (!isset($transicoes_validas[$status_atual]) || !in_array($novo_status, $transicoes_validas[$status_atual])) {
        return ['status' => 'erro', 'mensagem' => "Transição de status inválida de '{$status_atual}' para '{$novo_status}'. Alteração não permitida."];
    }

    $pedido['status'] = $novo_status;
    return ['status' => 'sucesso', 'mensagem' => "Status do pedido {$pedido_id} atualizado para '{$novo_status}'.", 'novo_status' => $novo_status];
}
?>