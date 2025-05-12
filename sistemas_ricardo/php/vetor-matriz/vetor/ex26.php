<?php

// Leia um vetor de números aleatórios e exiba a quantidade de elementos distintos.

$v = [];

for ($i=0; $i<10; $i++){
    $v[$i] = rand(1,20);
}

$unicos = array_unique($v);
$qtddinstintos = count($unicos);

print_r($v);

echo "Existem $qtddinstintos elementos distintos no array \n";

?>