<?php

require_once 'modulo01.php';
require_once 'modulo02.php';

echo "\n";
echo "========== CASOS DE TESTE DA LOJA DE VESTUÁRIO MODA ESSENCIAL ========== \n";
echo "\n";
/*
echo "==================== Módulo 1: Produtos e Catálogo ===================== \n";
echo "\n";
assert(validarProdutoValido()); // OK
assert(validarProdutoNomeVazio()); // OK
assert(validarProdutoPrecoNegativo()); // OK
assert(validarProdutoEstoqueNaoNumerico()); // OK
assert(testarBuscaPorNome()); // OK
assert(testarBuscaPorCategoria()); // OK
assert(testarBuscaPorId()); // OK
assert(testarAtualizarEstoqueDecremento()); // OK
assert(testarAtualizacaoEstoqueInsuficiente()); // OK 
*/

echo "==================== Módulo 2: Carrinho de Compras ===================== \n";

assert(testeAdicionarNovoItemCarrinho()); // OK
assert(testeAdicionarItemExistenteCarrinho()); // OK
assert(testarRemoverItemCarrinho()); // OK
assert(testarAtualizarQuantidadeItemCarrinho()); // OK
assert(testarAtualizarQuantidadeParaZero()); // OK
assert(testarCalcularTotalCarrinho()); // OK



?>