<?php

// Peça um número e exiba a tabuada de 1 até 10, mas interrompa a exibição se o resultado for maior que 50 usando break. 

$n = readline("Digite um número: ");

for ($i = 1; $i <= $n; $i++){
    $result = $i * $n;
    if ($result <= 50){
        echo "$i x $n = $result \n";
    }
    else {
        echo "O próximo resultado ultrapassou 50, programa encerrado \n";
        break;
    }
}

?>