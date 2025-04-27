<?php

// Solicite ao usuário números positivos e some-os.
// O programa deve continuar enquanto o usuário inserir números maiores que zero.
// Quando digitar 0 ou número negativo, pare e exiba a soma total.

$n = readline("Digite um número positivo: ");
$i = 0;
$nt = 0;

if (!ctype_digit($n)){
    echo "Dígito inválido, digite apenas números positivos. \n";
}
else {
    do {
        $nt = $n + $nt;
        if ($n > 0){
        $i++;
        };
        $n = readline("Digite um número positivo: ");
    }
    while ($n > 0);
    echo "Foi informado o número 0 ou negativo, programa encerrado. \n";
    echo "Soma de todos os dígitos: $nt \n";
}
?>