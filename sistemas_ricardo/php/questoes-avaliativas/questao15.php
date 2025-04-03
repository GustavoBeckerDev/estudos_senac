<?php

// Questão 16 : Receba o valor de uma compra e o tipo de cliente (comum, VIP, superVIP).
// Aplique descontos de 5%, 10% e 20% respectivamente e exiba o valor final. 

$valor = readline("Digite o valor da compra: ");
$tipo = readline("Digite o tipo de cliente: (1 = Comum, 2 = VIP, 3 = SuperVIP) = ");

if ($tipo == 1){
    $valorfinal = $valor - ($valor * 0.05);
    echo $valorfinal;
}
else if ($tipo == 2){
    $valorfinal = $valor - ($valor * 0.1);
    echo $valorfinal;
}
else if ($tipo == 3){
    $valorfinal = $valor - ($valor * 0.2);
    echo $valorfinal;
}
else 
    echo "Tipo de cliente não existe.";
?>