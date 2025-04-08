<?php

// Exercício 13 : Peça dois números e diga se são iguais, diferentes ou se um é múltiplo do outro.

$n1 = readline("Digite o 1º número: ");
$n2 = readline("Digite o 2° número: ");

if ($n1 == $n2){
    echo "O números são iguais. \n";
}
else {
    if ($n1%$n2==0 || $n2%$n1==0) {
        echo "Os números não são iguals e são múltiplos entre si. \n";
    }
    else {
        echo "Os números não sao iguais e múltiplos entre si. \n";
    }
}

?>