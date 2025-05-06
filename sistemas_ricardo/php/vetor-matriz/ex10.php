<?php

// Leia um vetor de 10 números e exiba quantos são positivos e quantos são negativos.

$v = array();
$p = 0;
$n = 0;

for ($i = 0; $i < 10; $i++){
    $v[$i] = readline('Digite um número: ');

    if ($v[$i] > 0){
        $n++;
    }
    else {
        $p++;
    }
}
echo "O total de valores negativos digitados foram: $n \n";
echo "O total de valores positivos digitados foram: $p \n"

?>