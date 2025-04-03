<?php

// EXERCÍCIO 19 : Peça dois números e um código de operação (1 = soma, 2 = subtração, 3 = multiplicação, 4 = divisão) e exiba o resultado. 

echo "-----CALCULADORA DAS 4 OPERAÇÕES-----\n";
echo "1 = soma, 2 = subtração, 3 = multiplicação, 4 = divisão\n";

$operacao = readline("Qual operação deseja fazer?\n");
$n1 = readline ("Digite o 1º número: \n");
$n2 = readline ("Digite o 2º número: \n");
$result = 0;

if ($operacao == "1"){
    echo "Operação de soma: \n";
    $result = $n1 + $n2;
    echo "$n1 + $n2 = $result\n";
}
else if ($operacao == "2"){
    echo "Operação de subtração: \n";
    $result = $n1 - $n2;
    echo "$n1 - $n2 = $result\n";
}
else if ($operacao == "3"){
    echo "Operação de multiplicação: \n";
    $result = $n1 * $n2;
    echo "$n1 * $n2 = $result\n";
}
else if ($operacao == "4"){
    echo "Operação de divisão: \n";
    $result = $n1 / $n2;
    echo "$n1 / $n2 = $result\n";
}
else 
    echo "Número inválido!!!\n";

?>