<?php

// Crie um vetor com 10 números e exiba apenas os pares armazenados.]

$v = array();
for ($i = 0; $i < 10; $i++){
    $v[$i] = readline ("Digite um número: ");
}
for ($i = 0; $i < 10; $i++){
    if ($v[$i] % 2 ==0){
        echo $v[$i] . "\n";
    }
}

?>