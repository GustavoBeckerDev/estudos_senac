<?php

// Peça um vetor de 20 números, remova todos os números ímpares e exiba apenas os valores pares. 

$v = [];

for ($i=0; $i<20; $i++){
    $v[$i] = readline("Digite um valor: ");
    if ($v[$i]%2!=0){
        unset($v[$i]);
    }
}

print_r($v);

?>