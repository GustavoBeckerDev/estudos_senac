<?php

// Leia um vetor de 10 números, remova os valores duplicados e exiba o vetor final.

$v = [];
for($i=0; $i<10; $i++){
    $n = readline("Digite um número: ");
    $v[] = $n;
}
$resultado = array_unique($v);

print_r($resultado);

?>