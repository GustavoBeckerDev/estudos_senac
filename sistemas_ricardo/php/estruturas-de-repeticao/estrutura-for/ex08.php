<?php

// INTERROMPER LAÇOS DE REPETIÇÃO COM BREAK.
// IMTERROMPE TOTALMENTE O LAÇO DE REPETIÇÃO.

echo "ADIVINHE O NÚMERO \n";
$n = rand(1,10);

while(true){
    $adivinha = readline("Tente adivinhar um número de 1 a 10: ");
    if ($adivinha == $n){
        echo "Você acertou o número: \n";
        break;
    }
}

?>