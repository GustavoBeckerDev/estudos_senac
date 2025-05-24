<?php

// FATORIAL DE N

$valor = readline("Digite um valor para saber seu fatorial: ");

function fatorial($valor){
    if ($valor == 0){
        return 1;
    }
    
    return $valor * fatorial($valor-1);
}

print fatorial($valor);

?>