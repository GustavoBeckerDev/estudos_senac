<?php

// Peça um número N e exiba a soma dos quadrados dos números de 1 até N usando for. 

$n = readline("Digite um número: ");
$soma = 0;
for ($i=1; $i<=$n; $i++){
    $quadrado = ($i * $i);
    $soma+=$quadrado;
}
echo "A soma de todos os quadrados de 1 até N é: $soma \n";

?>