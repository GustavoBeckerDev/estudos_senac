<?php

// Exercício 09 : Peça três números e exiba o maior. Se forem iguais, informe.

$n1 = readline("Digite o 1º número: ");
$n2 = readline("Digite o 2º número: ");
$n3 = readline("Digite o 3º número: ");

if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)){

    if ($n1 == $n2 && $n1 == $n3) {
    echo "Os valores são iguais. \n";
    }
    else {
        echo max($n1, $n2, $n3) . " é o maior valor. \n";
    }
}
else {
    echo "Dados incorretos. \n";
}

?>