<?php

// Crie um vetor de 10 números, solicite um valor X e exiba quantas vezes X aparece no vetor.

$x = readline("Digite um valor a ser encontrado no vetor: ");
$v = array();
$y = 0;

for ($i = 0; $i < 10; $i++){
    $v[$i] = rand(1,10);
    if ($v[$i] == $x){
        $y++;
    }
}

print_r($v);

echo "O valor $x apareceu $y vezes no vetor. \n";

?>