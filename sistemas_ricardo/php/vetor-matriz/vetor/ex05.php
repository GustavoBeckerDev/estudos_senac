<?php

// Preencha um vetor de 10 posições com valores inteiros aleatórios entre 1 e 100 e exiba o maior e o menor número encontrado.

$v = array();

for ($i = 0; $i < 10; $i++){
    $v[$i] = rand(1,100);
}

print_r($v);

echo "O maior número sorteado foi: " . max($v) . "\n";
echo "O menor número sorteado foi: " . min($v) . "\n";

?>