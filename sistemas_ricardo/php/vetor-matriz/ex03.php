<?php

// Peça ao usuário 5 números inteiros, armazene-os em um vetor e mostre a soma dos valores.
$soma = 0;
$v = array();
for ($i = 0; $i < 5; $i++){
    $v[$i] = readline ("Digite um número: ");
    $soma+=$v[$i];
}

echo "A soma de todos os valores digitados é: $soma \n";

?>