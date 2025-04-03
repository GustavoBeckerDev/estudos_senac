<?php

// EXERCÍCIO 20 : Peça um número de 1 a 12 e exiba a estação do ano correspondente. 

$mes = readline("Digite o número do mês (1 a 12): ");

if ($mes >= 12 || $mes <= 2) {
    echo "Estação: Verão\n";
} 
else if ($mes >= 3 && $mes <= 5) {
    echo "Estação: Outono\n";
} 
else if ($mes >= 6 && $mes <= 8) {
    echo "Estação: Inverno\n";
} 
else if ($mes >= 9 && $mes <= 11) {
    echo "Estação: Primavera\n";
} 
else {
    echo "Número de mês inválido! Digite um número entre 1 e 12.\n";
}

?>