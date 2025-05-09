<?php

// Crie um sistema de notas escolares usando matrizes.
// O sistema armazenará 4 notas de 3 alunos, calculará a média de cada aluno e exibirá mos resultados.

$notas[0][0]=null;
$linhas = 3;
$colunas = 6;

$notas[0][0]= 'Pedro';
$notas[1][0]= 'Gustavo';
$notas[2][0]= 'Marcela';

for ($i = 0; $i < $linhas; $i++){   
    $media = 0;
    for ($j = 1; $j < ($colunas-1); $j++){
        $notas[$i][$j] = readline("Informe a $j ª nota: ");
        $media += $notas[$i][$j];
    }
    $notas[$i][$j] = $media / ($j-1);
}
foreach($notas as $linha){
    foreach($linha as $item){
        echo "$item \t";
    }
    echo "\n";
}

?>