<?php

// Solicite um número e exiba os números primos até N, mas ignore múltiplos de 3 usando continue. 

$n = (int) readline("Digite um número: ");

for ($num = 2; $num <= $n; $num++) {
    $primo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }

    if (!$primo) {
        continue;
    }

    if ($num % 3 == 0) {
        continue;
    }

    echo "$num é primo e não múltiplo de 3\n";
}

?>