<?php

// EXERCÍCIO 14 : Peça um número de 1 a 5 e informe se ele é primo.

$n = readline("Digite um número de 1 a 5 para saber se é um número primo ou não: \n");

if ($n == 2 || $n == 3 || $n == 5){
    echo "O número é primo.";
}
else   
    echo "O número não é primo.";

?>