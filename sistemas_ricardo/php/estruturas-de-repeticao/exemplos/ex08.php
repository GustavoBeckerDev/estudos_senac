<?php

// Cire um programa que pergunte ao usuário por várias notas. 
// O prograna deve continuar pedindo as notas até que o usuário informe um valor negativo.
// Quando o valor negativo for informado, o programa deve exibir a média das notas inseridas.

echo "Digite sua(s) nota(s): \n";

$n = 0;
$notas = 0;
$i = 0;

do {
    $notas = $n + $notas;
    if ($i > 0){
    $i++;
    };
    $n = readline("Digite sua nota: ");
}
while ($n >= 0);

echo "Nota negativa informada. \n";

$media = $notas / ($i - 1);
echo "A média das notas é: $media \n";

?>