<?php

// Leia um número e informe se ele é positivo, negativo ou zero usando do...while.
// Caso o valor não for numérico, finalize o programa.

do {
    $n = readline("Digite um valor: ");

    if (!is_numeric($n)){
        echo "O valor digitado não é numérico, programa finalizado. \n";
        break;
    }
    if ($n < 0){
        echo "O número $n é negativo. \n";
    }
    if ($n == 0){
        echo "O número $n é zero. \n";
    } 
    if ($n > 0){
        echo "O número $n é positivo. \n";
    }
}while(true);

?>