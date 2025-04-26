<?php

// Peça ao usuário para inserir um número N e calcule a soma de todos os números inseridos de 1 até N e exiba o resultado.

$n = readline("Informe um número: ");
$soma = 0;

    for ($i=0; $i < $n; $i++){
        $soma += $i + 1;
    }
    echo $soma;

?>