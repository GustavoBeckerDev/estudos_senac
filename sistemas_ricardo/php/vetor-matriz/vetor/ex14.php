<?php

// Leia dois vetores de 5 posições e exiba um terceiro vetor contendo a soma dos elementos correspondentes.

$v1 = [];
$v2 = [];
$v3 = [];

echo "Primeiro vetor: \n";
for ($i = 0; $i < 5; $i++){
    $v1[$i] = readline("Digite um valor: ");
}

echo "Segundo vetor: \n";
for ($i = 0; $i < 5; $i++){
    $v2[$i] = readline("Digite um valor: ");
}

for ($i = 0; $i < 5; $i++){
    $v3[$i] = $v1[$i] + $v2[$i];
}

print_r($v3);

?>