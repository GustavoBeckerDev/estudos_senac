<?php

// Peça ao usuário para inserir um número e exiba a tabuada desse número de 1 a 10 utilizando loop while:

$n = readline("Digite um número: ");
$l = readline("Digite até quando você quer multiplicar: ");
$i = 1;

while ($i <= $l){
    $resultado = $n * $i;
    echo "$n x $i = $resultado \n";
    $i++;
}

?>