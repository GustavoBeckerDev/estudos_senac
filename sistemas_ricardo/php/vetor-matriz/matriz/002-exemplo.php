<?php

// Crie um programa que armazena as temperaturas registradas em uma cidade durante uma semana (7dias), em três períodos do dia (manhã, tarde e noite). O programa deve:
// Ler as temperaturas e armazená-las em uma matriz
// Calcular a média da temperatura para cada dia da semana
// Determinar o dia mais quente da semana (considerando a maior média diária)
// Exibir a matriz completa, as médias diárias e o dia mais quente

$temperaturas[0][0]=null;

$linhas = 8;
$colunas = 3;

$temperaturas[0][0]= 'Segunda';
$temperaturas[1][0]= 'Terça';
$temperaturas[2][0]= 'Quarta';
$temperaturas[3][0]= 'Quinta';
$temperaturas[4][0]= 'Sexta';
$temperaturas[5][0]= 'Sábado';
$temperaturas[6][0]= 'Domingo';

for ($i=0; $i < $linhas; $i++){
    $media = 0;
    for ($j=1; $j<$colunas; $j++){
        $temperaturas[$i][$j] = readline("Informe a temperatura do $jº período do dia {$temperaturas[$i][0]}: ");
        $media += $temperaturas[$i][$j];
    }
    $temperaturas[$i][$j] = $media / 3;
}








?>