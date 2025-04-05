<?php

// Exercício 03 : Peça ao usuário um número de 1 a 12 e exiba o nome do mês correspondente.

$n = readline("Digite um número de 1 a 12: ");
$n = trim($n);

if  (!preg_match('/^\d+$/', $n) || (int)$n < 1 || (int)$n > 12){
    echo "Número incorreto.";
}
else if ($n < 1 || $n > 12){
    echo "Número incorreto.";
}
else {

    switch ($n){
        case 1:
            echo "1 = Janeiro.";
            break;
        case 2:
            echo "2 = Fevereiro.";
            break;
        case 3:
            echo "3 = Março.";
            break;
        case 4:
            echo "4 = Abril.";
            break;
        case 5:
            echo "5 = Maio.";
            break;
        case 6:
            echo "6 = Junho.";
            break;
        case 7:
            echo "7 = Julho.";
            break;
        case 8:
            echo "8 = Agosto.";
            break;
        case 9:
            echo "9 = Setembro.";
            break;
        case 10:
            echo "10 = Outubro";
            break;
        case 11:
            echo "11 = Novembro.";
            break;
        case 12:
            echo "12 = Dezembro.";
            break; 
    }
}

?>