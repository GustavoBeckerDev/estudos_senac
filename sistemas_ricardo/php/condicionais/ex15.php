<?php

// EXERCÍCIO 14 : Peça um ano e informe se ele é bissexto (divisível por 4 e não por 100, exceto se for divisível por 400). 


$ano = readline("Digite um ano para saber se ele é bissexto ou não: ");

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "Ano bissexto.";
}
else
    echo "Ano não bissexto.";
?>