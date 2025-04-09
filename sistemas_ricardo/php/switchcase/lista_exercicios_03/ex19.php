<?php

// Exercício 19 : Peça o final da placa do carro e use switch-case para determinar o dia da semana em que ele não pode circular.

$finalplaca = trim(readline("Digite o último número da sua placa: "));

if (!ctype_digit($finalplaca) || ($finalplaca < 0 || $finalplaca > 9)){
    echo "Dígito incorreto, digite apenas números de 1 a 9. \n";
    exit;
}

switch ($finalplaca){
    case 1:
    case 2:
        echo "Você não pode circular na Segunda-feira das 07:00 às 10:00 e das 17:00 às 20:00. \n";
        break;
    case 3:
    case 4:
        echo "Você não pode circular na Terça-feira das 07:00 às 10:00 e das 17:00 às 20:00. \n";
        break;
    case 5:
    case 6:
        echo "Você não pode circular na Quarta-feira das 07:00 às 10:00 e das 17:00 às 20:00. \n";
        break;
    case 7:
    case 8:
        echo "Você não pode circular na Quinta-feira das 07:00 às 10:00 e das 17:00 às 20:00. \n";
        break;
    case 9:
    case 0:
        echo "Você não pode circular na Sexta-feira das 07:00 às 10:00 e das 17:00 às 20:00. \n";
        break;
}   

?>