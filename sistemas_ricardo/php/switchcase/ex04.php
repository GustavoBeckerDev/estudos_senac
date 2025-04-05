<?php

// Exercício 04 : Peça ao usuário que informe uma direção (1 a 4) e exiba o nome correspondente:
// 1 - NORTE, 2 - SUL, 3 - LESTE, 4 - OESTE.

echo "ESCOLHA UMA DAS SEGUINTES OPÇÕES: \n";
echo "1 - NORTE \n"; echo "2 - SUL \n"; echo "3 - LESTE \n"; echo "4 - OESTE \n";

$n = readline("Digite a direção: ");

if ($n <> 1 && $n <> 2 && $n <> 3 && $n <> 4 ){
    echo "Número inválido. \n";
}
else {
    switch ($n){
        case 1: 
            echo "1 - NORTE \n";
            break;
        case 2: 
            echo "2 - SUL \n";
            break;
        case 3: 
            echo "3 - LESTE \n";
            break;
        case 4: 
            echo "4 - OESTE \n";
            break;
    }
}

?>