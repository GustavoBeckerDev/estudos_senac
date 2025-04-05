<?php

// Exercício 10 : O usuário escolhe o destino com base em um código numérico,
// e o sistema mostra o valor da tarifa extra por bagagem excedente:
// 1 - Nacional (R$ 50 por mala extra)  
// 2 - América do Sul (R$ 100 por mala extra)  
// 3 - América do Norte (R$ 200 por mala extra)  
// 4 - Europa (R$ 300 por mala extra)  

echo "Escolha o seu destino: \n";
echo "1 - Nacional, 2 - América do Sul, 3 - América do Norte, 4 - Europa \n";
$destino = readline("Destino: ");

switch ($destino){
    case 1:
        echo "1 - Nacional (R$ 50 por mala extra) \n";
        $malas = readline("Quantas malas extras você tem: ");
        $vt = $malas * 50;
        echo "Valor total a ser pago: $vt \n";
        break;
    case 2:
        echo "2 - América do Sul (R$ 100 por mala extra)   \n";
        $malas = readline("Quantas malas extras você tem: ");
        $vt = $malas * 100;
        echo "Valor total a ser pago: $vt \n";
        break;
    case 3:
        echo "3 - América do Norte (R$ 200 por mala extra) \n";
        $malas = readline("Quantas malas extras você tem: ");
        $vt = $malas * 200;
        echo "Valor total a ser pago: $vt \n";
        break;
    case 4:
        echo "4 - Europa (R$ 300 por mala extra) \n";
        $malas = readline("Quantas malas extras você tem: ");
        $vt = $malas * 300;
        echo "Valor total a ser pago: $vt \n";
        break;
    default:
        echo "Opção incorreta. \n";
}

?>