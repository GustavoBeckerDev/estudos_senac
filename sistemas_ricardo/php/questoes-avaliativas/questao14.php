<?php

// Questão 14 : Receba um número de 1 a 12 e exiba quantos dias tem o mês correspondente. 
// Se for fevereiro, pergunte se o ano é bissexto para ajustar o número de dias. 

$n = readline("Digite um número de 1 a 12 para saber o mês correspondente: \n");

if ($n == 1){
    echo "Janeiro.\n";
    $dias = 31;
    echo "$dias dias.";
}
else if ($n == 2){
    echo "Fevereiro.\n";
    $dias = 28;
    $anobi = strtolower(readline("O ano é bissexto? [S/N]\n"));
    if ($anobi == "s"){
        $dias = 29;
        echo "$dias dias.";
    }
    else 
        echo "$dias dias.";
}
else if ($n == 3){
    echo "Março.\n";
    $dias = 30;
    echo "$dias dias.";
}
else if ($n == 4){
    echo "Abril.\n";
    $dias = 30;
    echo "$dias dias.";
}
else if ($n == 5){
    echo "Maio.\n";
    $dias = 31;
    echo "$dias dias.";
}
else if ($n == 6){
    echo "Junho.\n";
    $dias = 30;
    echo "$dias dias.";
}
else if ($n == 7){
    echo "Julho.\n";
    $dias = 31;
    echo "$dias dias.";
}
else if ($n == 8){
    echo "Agosto.\n";
    $dias = 31;
    echo "$dias dias.";
}
else if ($n == 9){
    echo "Setembro.\n";
    $dias = 30;
    echo "$dias dias.";
}
else if ($n == 10){
    echo "Outubro.\n";
    $dias = 31;
    echo "$dias dias.";
}
else if ($n == 11){
    echo "Novembro.\n";
    $dias = 30;
    echo "$dias dias.";
}
else if ($n == 12){
    echo "Dezembro.\n";
    $dias = 31;
    echo "$dias dias.";
}
else
    echo "Número inválido.\n";
?>