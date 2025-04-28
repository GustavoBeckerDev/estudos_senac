<?php

// Solicite ao usuário dois números A e B e exiba todos os números no intervalo [A, B] usando while.

//Utilizando for: 

$a = readline("Digite o primeiro número: ");
$b = readline("Digite o segundo número: ");

if (!is_number($a) || !is_numeric($b)){
    echo "Caractere inválido, digite apenas números inteiros.\n";
    exit;
}

if ($a > $b){
    for ($i=$b+1; $i <= $a -1; $i++){
    echo "$i \n";
    }
}
else if ($b > $a){
    for ($i=$a+1; $i <= $b -1; $i++){
    echo "$i \n";
    }
}else {
    echo "Os números são iguais, não há intervalo entre eles \n";
}



// Utilizando while: 

$a = readline("Digite o 1º número: ");
$b = readline("Digite o 2º número: ");
if (!is_numeric($a) || !is_numeric($b)) {
    echo "Caractere inválido, digite apenas números inteiros.\n";
    exit;
}
$a = intval($a);
$b = intval($b);
if ($a > $b){
    $b++;
    while ($b < $a){
        echo "$b \n";
        $b++;
    }
}
else if ($b > $a){
    $a++;
    while ($a < $b){
        echo "$a \n";
        $a++;
    }
}
else {
    echo "Os valores são iguais, não há intervalo entre eles, \n";
}





?>