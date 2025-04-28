<?php

// Leia um número e determine se ele é primo usando for.

$n = readline("Digite um número para saber se é primo ou não: ");

if ($n <=1){
    echo "O número $n não é primo. \n";
}else {
    $primo = true;

    for ($i=2; $i < $n; $i++){
        if ($n % $i==0){
            $primo=false;
            break;
        }
    }
    
    if ($primo){
        echo "O número $n é primo \n";
    }
    else {
        echo "O número $n não é primo. \n";
    }
}

?>