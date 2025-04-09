<?php

// Exercício 24 : Peça o tipo de veículo (carro, moto, caminhão, ônibus) e 
// exiba o valor do pedágio correspondente, usando switch-case. 

echo "Digite 1 = Moto, 2 = Carro, 3 = Caminhão, 4 = Ônibus. \n";
$tipo = readline("Digite o tipo de veículo baseado nos valores acima: ");

if (!ctype_digit($tipo)) {
    echo "Resposta incorreta, digite apenas números. \n";
    exit;
}

switch($tipo){
    case 1:
        echo "1 = Moto. \n";
        echo "Valor do pedágio para motos: $4.90 \n";
        break;
    case 2:
        echo "2 = Carro. \n";
        echo "Valor do pedágio para carros: $8.90 \n";
        break;
    case 3:
        echo "3 = Caminhão. \n";
        echo "Valor do pedágio para caminhões: $22.40 \n";
        break;
    case 4:
        echo "4 = Ônibus. \n";
        echo "Valor do pedágio para ônibus: $25.90 \n";
        break;
    default:
        echo "Valor digitado incorreto, ou não corresponde ao informado. \n";
}

?>