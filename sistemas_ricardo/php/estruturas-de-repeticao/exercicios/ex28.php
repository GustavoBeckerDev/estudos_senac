<?php

// Peça um número e exiba a sequência de Collatz até que o número atinja 1, usando while. 

$n = (int) readline("Digite um número positivo: ");
if ($n <= 0) {
    echo "Por favor, insira um número inteiro positivo maior que zero.\n";
    exit;
}
echo "$n \n";
while ($n != 1) {
    if ($n % 2 == 0) {
        $n = $n / 2;
    } else {
        $n = 3 * $n + 1;
    }
    echo "$n\n";
}
?>
