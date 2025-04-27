<?php

// Leia números inteiros até que o usuário digite um número negativo, então exiba a soma dos valores lidos.

$soma = 0;

do {
    $n = readline("Digite um número positivo: ");
    $n = intval($n);
    if ($n >= 0){
        $soma+=$n;
    }
}while ($n >= 0);

echo "Você digitou um valor negativo, programa finalizado. \n";
echo "A soma de todos os valores inteiros e positivos digitados é $soma. \n";

?> 