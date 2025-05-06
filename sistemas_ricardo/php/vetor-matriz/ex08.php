<?php

// Declare um vetor de 10 posições, preencha-o com valores e exiba os números em ordem inversa.

$v = array();
for ($i = 0; $i < 10; $i++){
    $v[$i] = readline ("Digite um número: ");
}

$reversed = array_reverse($v);
print_r($reversed);

?>