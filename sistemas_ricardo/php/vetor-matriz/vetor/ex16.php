<?php

// Leia um vetor de 20 números e exiba a quantidade de números primos. 

$v = [];
$nprimos=[];
$qtdprimos = 0;

for ($i=0; $i<5; $i++){
    $n = readline("Digite o ".($i+1). "º número: ");
    $v[]=$n; 
    $divisores = 0;
    for ($j = 1; $j <= $n; $j++){
        if ($n % $j == 0){
            $divisores++;
        }
    }   
    if ($divisores == 2){
        $qtdprimos++;
        $nprimos[]=$n;
    }
}

echo "Existem $qtdprimos números primos neste vetor. \n";
echo "Que são estes: \n";
print_r($nprimos);

?>