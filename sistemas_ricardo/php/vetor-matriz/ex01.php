<?php

// Exemplo vetor 01:

$soma = 0;
$vetor = array();
$notas = readline("Quantas notas quer pedir? ");

for ($i = 0; $i < $notas; $i ++){
    $vetor[$i] = readline("Informe uma nota: ");
    $soma+=$vetor[$i];
}
$media = $soma / $notas;

if ($media >= 7){
    echo $media; 
    echo "Aluno aprovado. \n";
}
else if (($media)>=2 || ($media)< 7){
    echo $media;
    echo "Aluno em recuperação \n";
}
else {
    echo $soma . "\n";
    echo "Aluno reprovado. \n";
}

?>