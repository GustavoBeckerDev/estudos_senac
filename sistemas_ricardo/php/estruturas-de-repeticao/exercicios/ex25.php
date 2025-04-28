<?php

// Leia um número N e exiba a soma dos quadrados dos números de 1 até N, mas ignore os números divisíveis por 5, usando continue. 

$n = readline("Digite um número: ");
$soma = 0;
$quad = 0;

for ($i = 1; $i <= $n; $i++){
    if ($i % 5 == 0){
        continue;
    }
    $quad = $i * $i;
    $soma += $quad; 
}
echo "A soma de todos os quadrados é $soma. \n";
?>