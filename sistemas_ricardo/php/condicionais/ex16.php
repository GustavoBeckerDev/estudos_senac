<?php

// EXERCÍCIO 16 : Peça um número de 1 a 7 e exiba o nome do dia correspondente (1 = Domingo, 2 = Segunda etc.)

$n = readline("Digite um número de 1 a 7 para saber o dia da semana correspondente: ");

if ($n == 1){
    echo "1 = Domingo.";
}
else if ($n == 2){
    echo "2 = Segunda.";
}
else if ($n == 3){
    echo "3 = Terça.";
}
else if ($n == 4){
    echo "4 = Quarta.";
}
else if ($n == 5){
    echo "5 = Quinta.";
}
else if ($n == 6){
    echo "6 = Sexta.";
}
else if ($n == 7){
    echo "7 = Sábado.";
}
else
    echo "Número incorreto."

?>