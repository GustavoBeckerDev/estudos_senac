<?php

// Leia um número e exiba seus divisores primos usando for. 

$n = (int) readline("Digite um número: ");

echo "Divisores primos de $n:\n";

for ($i = 2; $i <= $n; $i++) {
    if ($n % $i == 0) {
        $nprimo = true;
        for ($j = 2; $j <= $i - 1; $j++) {
            if ($i % $j == 0) {
                $nprimo = false;
                break;
            }
        }

        if ($nprimo) {
            echo "$i\n";
        }
    }
}

?>
