<?php

// EXERCÍCIOS ESTRUTURAS CONDICIONAIS
// EXERCÍCIO 01 : Peça um número e informe se ele é positivo, negativo ou zero. 

$n = readline ("Digite um número: ");

if ($n>0){
echo "O número é positivo.";
}else if ($n == 0){
    echo "O número é zero.";
}
else
    echo "O número é negativo.";
?>