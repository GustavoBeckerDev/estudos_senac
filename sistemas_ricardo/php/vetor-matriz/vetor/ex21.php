<?php

// Crie um vetor de 15 números inteiros e exiba a moda (o número que mais se repete). 

$v = [];
for($i=0; $i<5; $i++){
    $n = readline("Digite um número: ");
    $v[] = $n;
}

$count = array_count_values($v);

$moda = array_search(max($count), $count);

echo "O número que mais se repete no array é: $moda \n";

?>