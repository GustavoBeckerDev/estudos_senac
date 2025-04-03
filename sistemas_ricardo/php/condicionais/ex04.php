<?php

// EXERCÍCIO 04 : Peça três números e exiba o maior. 

$n1 = readline("Digite o 1º número :");
$n2 = readline("Digite o 2º número :");
$n3 = readline("Digite o 3º número :");

if ($n1 >= $n2 && $n1 >= $n3){
    echo "$n1 é o maior número.";
}
else if ($n2 >= $n1 && $n2 >= $n3){
    echo "$n2 é o maior número";
}
else
    echo "$n3 é o maior número";
?>