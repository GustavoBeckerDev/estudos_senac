<?php

// Exercício 01 : Peça ao usuário um número de 1 a 7 e exiba o nome correspondente ao dia da semana =
// (1 = Domingo, 2 = Segunda, ..., 7 = Sábado).

$n = readline("Digite um número de 1 a 7 para saber o dia da semana: ");

if ($n < 1 || $n > 7){
    echo "Número incorreto.";
}
else {

    switch ($n){
        case 1:
            echo "1 = Domingo.";
            break;
        case 2:
            echo "2 = Segunda.";
            break;
        case 3:
            echo "3 = Terça.";
            break;
        case 4:
            echo "4 = Quarta.";
            break;
        case 5:
            echo "5 = Quinta.";
            break;
        case 6:
            echo "6 = Sexta.";
            break;
        case 7:
            echo "7 = Sábado.";
            break;
    }
}
?>
