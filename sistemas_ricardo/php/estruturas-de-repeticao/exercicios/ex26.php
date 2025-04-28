<?php

// Solicite um número N e exiba os primeiros N números primos, encerrando se forem encontrados 10 números primos, usando break. 
$n = readline("Digite a quantidade de números primos que deseja exibir: ");
$totPrimo = 0;
$num = 2;
while (true) {
    $primo = true;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
    if ($primo) {
        echo "$num é primo.\n";
        $totPrimo++;
    }
    if ($totPrimo == $n || $totPrimo == 10) {
        break;
    }
    $num++;
}
echo "Programa encerrado: foram exibidos $totPrimo números primos.\n";
?>