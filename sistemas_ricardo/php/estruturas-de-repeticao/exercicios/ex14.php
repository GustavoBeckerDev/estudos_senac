<?php

// Solicite um número e exiba seus fatores primos usando while.

$n = readline("Digite um valor para saber seus fatores primos: ");
$divisor = 2;

while ($n > 1) {
    if ($n % $divisor == 0) {
        echo $divisor . "\n";
        $n = $n / $divisor;
    } else {
        $divisor++;
    }
}

?>