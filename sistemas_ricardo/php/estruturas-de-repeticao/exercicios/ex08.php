<?php

// Solicite um número e exiba a soma de seus dígitos usando while.

$numero = readline("Digite um número: ");
$soma = 0;

if (!is_numeric($numero)) {
    echo "O valor digitado não é um número.\n";
    exit;
}

while ($numero > 0) {
    $digito = $numero % 10; 
    $soma += $digito;      
    $numero = ($numero / 10);
}

echo "A soma dos dígitos é $soma. \n";

?>