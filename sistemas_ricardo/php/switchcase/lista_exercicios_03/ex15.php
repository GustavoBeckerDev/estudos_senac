<?php

// Exercício 15 : Peça a categoria da CNH (A, B, C, D, E) e exiba os tipos de 
// veículos que a pessoa pode dirigir, usando switch-case. 

$cnh = strtoupper(readline("Digite a categoria da sua CNH: "));

if(!ctype_alpha($cnh)) {
    echo "Dígitos incorretos, escreva apenas letras. \n";
    exit;
}
switch($cnh){
    case "A":
        echo "CNH TIPO A. \n";
        echo "Veículos permitidos: MOTO, MOTONETA, CICLOMOTOR \n";
        break;
    case "B":
        echo "CNH TIPO B. \n";
        echo "Veículos permitidos: CARRO, VANS E UTILITÁRIOS (ATÉ 8 LUGARES) \n";
        break;
    case "C":
        echo "CNH TIPO C. \n";
        echo "Veículos permitidos: CAMINHÕES PEQUENOS, CAMINHONETES PESADAS (PTB > 3.5T) \n";
        break;
    case "D":
        echo "CNH TIPO D. \n";
        echo "MICRO-ÔNIBUS, ÔNIBUS ESCOLARES, ÔNIBUS URBANOS (8 + LUGARES) \n";
        break;
    case "E":
        echo "CNH TIPO E. \n";
        echo "CARRETAS, CAMINHÕES COM REBOQUE, ÔNIBUS COM REBOQUE (PTN > 6T) \n";
        break;
    default:
        echo "OPÇÃO INCORRETA, ESCOLHA DE A ATÉ E. \n";
}

?>