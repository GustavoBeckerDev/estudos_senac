<?php

// Peça números ao usuário até que ele insira 0, então exiba a quantidade de números digitados.

$total = 0;

do {
    $n = readline("Digite um número: ");
    $total++;

}while ($n != 0); 

echo "O total de números digitados foram $total. \n";

?>