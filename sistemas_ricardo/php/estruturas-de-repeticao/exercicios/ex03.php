<?php

// Peça um número N e calcule a soma de todos os números de 1 até N usando for.

$n = readline("Digite um valor para n: ");
$total = 0;

for ($i=1; $i <=$n; $i++){
    $total+=$i;
}

echo "$total é a soma total de todos os valores. \n";

?>