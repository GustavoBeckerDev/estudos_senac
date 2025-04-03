<?php

// EXERCÍCIO 13 : Leia o valor de um produto e, se for maior que R$ 100, aplique 10% de desconto.

$produto = readline ("Digite o valor do produto: \n");

if ($produto > 100){
    $produto = $produto * 0.90;
    echo $produto;
}
else 
    echo "Desconto não aplicado.";

?>