<?php

// Leia números do usuário e exiba a soma acumulada, 
// ignorando os números negativos e encerrando se a soma ultrapassar 200, usando continue e break. 

$soma = 0;

while (true) {
    $numero = (int) readline("Digite um número: ");

    if ($numero < 0) {
        continue;
    }
    $soma += $numero;
    echo "Soma atual: $soma\n";
    if ($soma > 200) {
        break;
    }
}

echo "Programa encerrado! A soma final foi: $soma\n";

?>