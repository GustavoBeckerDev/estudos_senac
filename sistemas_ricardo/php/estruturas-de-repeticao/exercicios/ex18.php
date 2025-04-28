<?php

// Leia um número N e exiba apenas os múltiplos de 3 e 5 no intervalo [1, N] usando for. 

$n = trim(readline("Digite um número: "));
$totmult = 0;

for ($i=1; $i <= $n; $i++){
    if ($i % 3 == 0 && $i % 5 == 0){
        echo "O número $i é múltiplo de 3 e 5. \n";
        $totmult++;
    }
}
    echo "O total de números múltiplos de 3 e 5 digitados entre o intervalo de 1 ate $n foram: $totmult \n";
?>