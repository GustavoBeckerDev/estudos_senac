<?php

// Peça ao usuário para inserir um número positivo N. 
// O programa deve exibir todos os números de 1 até N utilizando loop while:

$n = readline("Digite um valor positivo para n: ");
$i = 1;

while ($i <= $n){
    echo $i. "\n";
    $i++;
}

?>