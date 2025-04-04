<?php

echo "Escolha uma das opções abaixo: \n";
echo "1 - Soma \n";
echo "2 - Subtração \n";
echo "3 - Multiplicação \n";
echo "4 - Divisão \n";

$opcao = readline("Escolha o tipo de operação: ");
$n1 = readline("Digite o 1º número: ");
$n2 = readline("Digite o 2º número: ");

switch ($opcao){
    case 1:
        echo " 1 = Soma";
        $resp = $n1 + $n2;
        break;
    case 2:
        echo " 2 = Subtração";
        $resp = $n1 - $n2;
        break;
    case 3:
        echo " 3 = Multiplicação";
        $resp = $n1 * $n2;
        break;
    case 4:
        echo " 4 = Divisão";
        $resp = $n1 / $n2;
        break;
}

?>