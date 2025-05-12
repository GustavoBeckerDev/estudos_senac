<?php

// Leia um vetor de 20 números e exiba o segundo maior e o segundo menor valor do vetor.

$v = [];

for ($i=0; $i<10; $i++){
    $v[$i] = readline("Digite um valor: ");
}

$temp = $v;
sort($temp);

$segundomenor = $temp[1];
$segundomaior = $temp[count($temp)-2];

print_r($v);

echo "O segundo menor valor do array é: $segundomenor \n";
echo "O segundo maior valor do array é: $segundomaior \n";

?>