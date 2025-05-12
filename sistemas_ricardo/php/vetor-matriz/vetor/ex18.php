<?php

// Crie um vetor de 10 números aleatórios e mova todos os valores pares para o início do vetor e os ímpares para o final. 

// PRIMEIRO MÉTODO:

$v = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$impares = array_filter($v, function($n) { 
    return $n % 2 != 0; });

$pares = array_filter($v, function($n) { 
    return $n % 2 == 0; });

$resultado = array_merge($pares, $impares);

print_r($resultado);

// SEGUNDO MÉTODO:

$v = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$impares = [];
$pares=[];

foreach ($v as $n) {
    if ($n % 2 != 0) {
        $impares[] = $n;
    }
    else {
        $pares[] = $n;
    }
}

$resultado = array_merge($pares, $impares);

print_r($resultado);

?>