<?php

// EXERCÍCIO 18 : Peça um valor e uma moeda (1 = dólar, 2 = euro, 3 = libra) e exiba a conversão.

do {

echo "Digite um valor em reais R$ e escolha a moeda para fazer a conversão.\n";
echo "Digite 1 para Dólar, 2 para Euro, 3 para Libra\n";
$moeda = readline("Escolha uma moeda para a conversão: ");
$valor = readline("Digite um valor para converter: ");
$VF = "";

if ($moeda == "1"){
    $VF = $valor / 5;
    echo $valor . "R$ convertidos para dólar = " . number_format($VF, 2) . "\n";
} 
else if ($moeda == "2"){
    $VF = $valor / 6;
    echo $valor . "R$ convertidos para euros = " . number_format($VF, 2) . "\n";
}
else if ($moeda == "3"){
    $VF = $valor / 7;
    echo $valor . "R$ convertidos para libras = " . number_format($VF, 2) . "\n";
}
else 
    echo "Opção inválida! Escolha 1, 2 ou 3.\n";

    $continuar = readline("Deseja fazer outra conversão? (s/n): ");

} while (strtolower($continuar) == "s");

echo "Programa encerrado!\n";

?>