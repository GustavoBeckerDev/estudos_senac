<?php

// Exercício 09 : O usuário escolhe uma opção e digita um valor. O sistema converte conforme a escolha:
// 1 - Metros para Centímetros , 2 - Quilômetros para Metros , 3 - Gramas para Quilogramas , 4 - Horas para Minutos.

echo "1 - Metros para Centímetros , 2 - Quilômetros para Metros , 3 - Gramas para Quilogramas , 4 - Horas para Minutos \n";

$op = readline("Escolha uma das opções acima: ");

switch ($op){
    case 1:
        echo "1 - Metros para Centímetros \n";
        $n1 = readline("Digite um valor para conversão: ");
        $result = $n1 * 100;
        echo "$n1 metros é igual a $result centímetros. \n";
        break;
    case 2:
        echo "2 - Quilômetros para Metros \n";
        $n1 = readline("Digite um valor para conversão: ");
        $result = $n1 * 1000;
        echo "$n1 km é igual a $result metros. \n";
        break;
    case 3:
        echo "3 - Gramas para Quilogramas \n";
        $n1 = readline("Digite um valor para conversão: ");
        $result = $n1 / 1000;
        echo "$n1 gramas é igual a $result quilogramas \n";
        break;
    case 4:
        echo "4 - Horas para Minutos \n";
        $n1 = readline("Digite um valor para conversão: ");
        $result = $n1 * 60;
        echo "$n1 hora(s) é igual a $result minutos \n";
        break;
    default:
        echo "Opção inválida. \n";

}

?>