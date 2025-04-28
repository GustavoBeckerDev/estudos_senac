<?php

// Leia números e exiba apenas os valores ímpares até que o usuário insira um número par, usando break. 

do {
    $n = readline("Digite um número: ");
    if ($n % 2 != 0){
        echo "$n \n";
    }
    else {
        echo "Valor par digitado, programa encerrado. \n";
        break;
    }
} while ($n%2!=0);
?>