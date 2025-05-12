<?php

// Peça um vetor de 10 números e ordene os elementos de forma crescente.

$v = [];

for($i = 0; $i < 10; $i++){
    $v[$i] = readline("Digite um número: ");
}

sort($v);

print_r($v);

?>