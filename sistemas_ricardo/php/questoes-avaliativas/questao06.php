<?php

// Questão 06 : Receba três números e informe qual é o maior e qual é o menor. Se forem iguais, informe que são idênticos.

$n1 = readline("Digite o 1º número: ");
$n2 = readline("Digite o 2º número: ");
$n3 = readline("Digite o 3º número: ");

if ($n1 == $n2 && $n2 == $n3) {
    echo "Os números são idênticos.\n";
} else 
    $maior = max($n1, $n2, $n3);
    $menor = min($n1, $n2, $n3);

    echo "O maior número é: $maior\n";
    echo "O menor número é: $menor\n";
?>