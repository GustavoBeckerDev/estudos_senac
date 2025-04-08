<?php

// Exercício 11 : Receba um número e informe se ele é múltiplo de 3 e 5 ao mesmo tempo.

$n = readline("Digite um número: ");

if (($n%3==0) && ($n%5==0)){
    echo "$n é divisível por 3 e por 5.";
}
else{
    echo "$n não é divisível por 3 e por 5.";
}

?>