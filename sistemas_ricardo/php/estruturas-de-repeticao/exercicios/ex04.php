<?php

// Solicite um número N e exiba a tabuada dele de 1 a 10 usando for.

$n = readline("Quer saber a tabuada de qua número? ");

for ($i=1; $i <=10; $i++){
    $total = $i * $n;
    echo "$n x $i = $total. \n";
}

?>