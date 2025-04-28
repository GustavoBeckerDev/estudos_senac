<?php

// Leia um número N e exiba apenas os números pares de 1 até N usando while. 

$n = readline("Digite um valor para n: ");

for ($i=1; $i<=$n; $i++){
    if ($i%2==0){
        echo "$i é par.\n";
    }
}

?>