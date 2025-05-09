<?php

// Peça ao usuário um número X e um vetor com 10 elementos, depois verifiquese X está presente no vetor.

$x = readline("Digite um valor a ser encontrado no vetor: ");
$v = array();
$presente = false;

for ($i = 0; $i < 10; $i++){
    $v[$i] = rand(1,100);
    if ($v[$i] == $x){
        $presente = true;
    }
}

print_r($v);

if ($presente == true){
    echo "O valor $x está presente no vetor \n";
}
else {
    echo "O valor $x não está presente no vetor \n";
}
?>