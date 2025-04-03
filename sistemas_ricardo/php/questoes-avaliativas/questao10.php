<?php

// Questão 10 : Receba o valor total de uma compra.
// Se for maior ou igual a R$ 200, informe "Frete grátis!", senão, informe "Frete: R$ 15,00".

$valor = readline("Digite o valor total da compra: ");

if ($valor >= 200){
    echo "Frete grátis!!!";
}
else
    echo "Frete > R$15,00";
?>