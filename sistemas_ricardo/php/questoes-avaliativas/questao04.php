<?php

// Questão 04 : Receba um valor inicial e uma taxa de juros simples, calcule o montante final após um período de tempo.
// Informe se o lucro foi superior a um valor específico. 

$valor = readline("Digite um valor: ");
$juros = readline("Taxa de Juros: ");
$tempo = readline("Tempo: ");

$juros = $juros / 100;
$lucro = ($valor * $juros) * $tempo;
$valorfinal = $valor + $lucro;

if ($lucro >= 5000){
    echo "$valorfinal\n";
    echo "Ótimo negócio";
}
else 
    echo "$valorfinal\n";
    echo "Ainda tem como melhorar.";
?>