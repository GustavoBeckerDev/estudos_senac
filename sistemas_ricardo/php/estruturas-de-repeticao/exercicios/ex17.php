<?php

// Peça números ao usuário e exiba quantos são pares e ímpares. O programa encerra se 0 for digitado. 

$totpar = 0;
$totimpar = 0;

do {
    $n = readline("Digite um número: ");
    if ($n % 2 == 0){
        echo "O número $n é par. \n";
        $totpar++;
    }
    else {
        echo "O número $n é ímpar. \n";
        $totimpar++;
    }
}while ($n != 0);
    echo "O número zero foi digitado, programa finalizado \n";
    echo "O total de valores pares digitados foi: " .$totpar - 1 ."\n";
    echo "O total de valores ímpares digitados foi: $totimpar \n";

?>