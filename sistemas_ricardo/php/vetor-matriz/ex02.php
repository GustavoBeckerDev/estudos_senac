<?php

// Declare um vetor de 5 posições, preencha-o com números fornecidos pelo usuário e exiba os valores na tela.

$v = array();
for ($i = 0; $i < 5; $i++){
    $v[$i] = readline ("Digite um número: ");
}

print_r($v);

 ?>