<?php

require_once 'produtos_catalogo.php';

// TESTE PROD-001 : VALIDAÇÃO DE PRODUTO VÁLIDO

function validarProdutoValido()
{
    $result = validar_produto('camiseta', 29.90, 'Camiseta de algodão', 50, 'Roupa');
    if ($result ['status'] == 'sucesso'){
        return false;
    }
    else {
        echo "Passou no teste validar produto válido. \n";
        return true;
    }
}

// TESTE PROD-002 : VALIDAÇÃO DE PRODUTO COM NOME VAZIO




//





?>