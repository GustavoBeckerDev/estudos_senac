<?php

// Questão 05 : O usuário informa um código (1 para triângulo, 2 para retângulo, 3 para círculo)
// e o programa calcula e exibe a área correspondente.

echo "Calculo de área.\n";
$opcao = readline  ("Digite 1 para Triangulo, 2 para retângulo ou 3 para círculo.\n");

if ($opcao == 1){
    echo "Cálculo de área de um triângulo: \n";
    $b = readline("Digite um valor para a base: ");
    $h = readline("Digite um valor para a altura: ");
    $area = ($b * $h) / 2;
    echo number_format($area, 2, ',', '.');
}
else if ($opcao == 2){
    echo "Cálculo de área de um retângulo: \n";
    $b = readline("Digite um valor para a base: ");
    $h = readline("Digite um valor para a altura: ");
    $area = $b * $h;
    echo number_format($area, 2, ',', '.');
}
else if ($opcao == 3){
    echo "Cálculo de área de um circulo: \n";
    $r = readline("Digite um valor para o raio: ");
    $area = pi() * ($r * $r);
    echo number_format($area, 2, ',', '.');
}
else
    echo "Opção inválida.";
?>