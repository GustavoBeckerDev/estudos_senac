<?php

// Peça ao usuário que digite um valor e exiba a tabuada de N de 1 até 10 utilizando o laço for.

$n = readline("Informe um número para saber a sua tabuada: ");
$multi = 0;

    for ($i=1; $i <= 10; $i++){
        $multi = $n * $i;
        echo $multi . "\n";
    }

    

?>