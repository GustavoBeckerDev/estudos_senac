<?php

// Exercício 23 : Peça o tipo de moeda (USD, EUR, GBP, JPY) e exiba o valor convertido para Reais (BRL), usando switch-case.

echo "Conversão de moedas, escolha uma das opções abaixo para converter para BRL: \n";
$moeda = trim(readline("Digite 1 = USD, 2 = EUR, 3 = GBP, 4 = JPY: "));

if (!ctype_digit){
    echo "Dígito inválido, digite apenas números. \n";
    exit;
}
switch($moeda){
    case 1:
        echo "1 = USD > BRL \n";
        $brl = $moeda * 6.06;
        echo $brl . " REAIS \n";
    case 2:
        echo "2 = EUR > BRL \n";
        $brl = $moeda * 6.67;
        echo $brl . " REAIS \n";
    case 3:
        echo "3 = GBP > BRL \n";
        $brl = $moeda * 7.72;
        echo $brl . " REAIS \n";
    case 4:
        echo "4 = JPY > BRL \n";
        $brl = $moeda * 0.042;
        echo $brl . " REAIS \n";
    default:
        echo "Opção incorreta, escolha de 1 a 4. \n";
}

?>