<?php

// INTERROMPER PARCIALMENTE LAÇOS DE REPETIÇÃO COM CONTINUE.
// O COMANDO CONTINUE INTERROMPE APENAS UMA VOLTA DO LAÇO E PROSEGUE COM O LAÇO DE REPETIÇÃO.

$n = readline("Digite um valor: ");
$totalimpar = 0;

for ($i=0; $i <$n;$i++){
    if (($i+1)%2==0){
        continue;
    }
    $totalimpar++;
}


?>