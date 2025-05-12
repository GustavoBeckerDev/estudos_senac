<?php

// Leia um vetor de 30 números, separe os valores primos em um novo vetor e exiba os dois vetores.

$v = [];
$nprimos = [];

for ($i=0; $i<30; $i++){
    $n = readline("Digite o ".($i+1). "º número: ");
    $v[]=$n; 
    $divisores = 0;
    for ($j = 1; $j <= $n; $j++){
        if ($n % $j == 0){
            $divisores++;
        }
    }   
    if ($divisores == 2){
        $nprimos[]=$n;
    }
}

print_r($v);
print_r($nprimos);