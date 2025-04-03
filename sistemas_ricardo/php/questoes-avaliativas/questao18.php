<?php

// Questão 18 : Receba um ano e informe se é bissexto ou não (múltiplo de 4, exceto se for múltiplo de 100 mas não de 400).

$ano = readline("Digite um ano para saber se é bissexto: ");

if (($ano%4 == 0 && $ano%100<>0) || ($ano%400 == 0)) { 
    echo "Ano $ano é Bissexto.";
}
else {
    echo "Ano não bissexto.";
}
?>