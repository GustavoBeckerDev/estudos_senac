<?php

// Escreva um aplicativo que recebe um número inteiro e mostra os números pares e ímpares (separados), de 1 até esse inteiro.

$n = readline("Digite um número: ");

for ($i=0;$i < $n; $i++){
    if (($i+1)%2==0){
        echo $i + 1 . " é par. \n";
    }
}
for ($i=0;$i < $n;$i++){
    if (($i+1)%2==1){
        echo $i + 1 . " é ímpar. \n";
    }
}

?>