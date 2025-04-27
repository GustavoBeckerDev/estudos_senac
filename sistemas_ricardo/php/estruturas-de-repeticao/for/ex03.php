<?php

// Peça ao usuário para inserir um número N, o programa deve exibir todos os números pares de 1 até N utilizando laço for.

$n = readline("Digite um número: ");

for ($i = 0; $i < $n; $i++){
    if (($i+1)%2 == 0){
        echo $i + 1 . " é par. \n";
    }
}

?>