<?php

// Peça um número e exiba a sequência de Fibonacci até que o valor ultrapasse N usando while.

$nFinal = readline("Digite um número: ");
$n1 = 0;
$n2 = 1;
echo "$n1 \n";
echo "$n2 \n";
$n3 = $n1 + $n2;

while ($n3 <= $nFinal + 1){ 
    echo "$n3 \n";
    $n1 = $n2;
    $n2 = $n3;
    $n3 = $n1 + $n2;
}

?>