<?php

// Leia 2 vetores de 5 posições e exiba um terceiro vetor contendo os valores comuns entre os dois. 

$v1 = [];
$v2 = [];

echo "Primeiro vetor: \n";
for ($i = 0; $i < 5; $i++){
    $v1[$i] = readline("Digite um valor: ");
}

echo "Segundo vetor: \n";
for ($i = 0; $i < 5; $i++){
    $v2[$i] = readline("Digite um valor: ");
}

$v3[] = array_intersect($v1, $v2);

print_r($v3);

?>