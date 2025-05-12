<?php

// Solicite ao usuário 5 nomes e os exiba em ordem alfabética. 

$nomes = [];

for ($i=0; $i<5; $i++){
    $n = readline("Digite seu nome: ");
    $nomes[] = $n;
}

sort($nomes);
print_r($nomes);

?>