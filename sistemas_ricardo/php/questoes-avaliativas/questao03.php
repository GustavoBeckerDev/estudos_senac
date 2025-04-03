<?php

// Receba o peso (kg) e altura (m) de uma pessoa e calcule: 
// Índice de Massa Corporal (IMC) e classifique o resultado conforme a tabela de obesidade da OMS.

$peso = readline("Digite seu peso atual (KG): ");
$altura = readline("Digite sua altura atual(M): ");

$IMC = $peso / ($altura * $altura);

if ($IMC <=18.5){
    echo "Classificação: Magreza.";
}
else if ($IMC >= 18.6 && $IMC <= 24.9){
    echo "Classificação: Normal.";
}
else if ($IMC >= 20 && $IMC <= 29.9){
    echo "Classificação: Sobrepeso.";
}
else if ($IMC >= 30 && $IMC <= 39.9){
    echo "Classificação: Obesidade.";
}
else if ($IMC >= 40){
    echo "Classificação: Obesidade Grave.";
}
else "Valor incomum.";

?>