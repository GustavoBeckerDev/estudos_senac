<?php

// EXERCÍCIO 10 : Peça um número inteiro e informe se ele tem um, dois ou três dígitos.

$n = readline("Digite um número inteiro:");
$n = abs((int)$n);

if ($n >=0 && $n <=9){
    echo "O número $n tem 1 dígito.";
}
else if ($n >9 && $n <100){
    echo "O número $n tem 2 dígitos.";
}
else 
    echo "O número tem 3 digitos ou mais";
?>