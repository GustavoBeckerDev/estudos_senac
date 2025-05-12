<?php

// Crie um vetor de 10 números e gere todas as possíveis combinações (2 elementos sem repetição) de pares de números dentro desse vetor. 

$vetor = [5, 8, 12, 3, 7, 21, 15, 9, 4, 10];

$contador = 0;

for ($i = 0; $i < count($vetor); $i++) {
    for ($j = $i + 1; $j < count($vetor); $j++) {
        $contador++;
        echo "Par $contador: (" . $vetor[$i] . " e " . $vetor[$j] . ")\n";
    }
}

echo "\nTotal de combinações: $contador";

?>