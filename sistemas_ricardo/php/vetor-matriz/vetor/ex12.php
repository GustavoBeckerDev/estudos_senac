<?php

// Leia um vetor de 8 posições e exiba apenas os valores ímpares e suas respectivas posições.

$v = array();

for ($i = 0; $i < 8; $i++){
    $v[$i] = rand(1,10);
    if ($v[$i]%2==1){
        echo "O valor ". $v[$i] . " é ímpar e ele está na posição ". $i . "\n";
    }
}

print_r($v);

?>