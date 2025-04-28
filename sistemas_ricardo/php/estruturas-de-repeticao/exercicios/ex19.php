<?php

// Peça um número N e exiba seu fatorial usando while.

$n = readline("Digite um número para saber seu fatorial (cuidado com números grandes): ");
$fat = 1;
$aux = $n;

while ($n > 1){
    $fat *= $n;
    $n--;
}
echo "O fatorial de $aux é: $fat. \n";
?>