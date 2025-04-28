<?php

// Peça um número N e exiba os divisores de N usando for.

$n = readline("Digite um número: ");

for ($i=1; $i <= $n; $i++){
    if ($n % $i == 0){
        echo "$i é um divisor de $n. \n";
    }
}

?>