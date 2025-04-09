<?php

// Exercício 08 : Peça a idade e informe se a pessoa pode assistir ao filme baseado na classificação indicativa 
// (livre, 12, 14, 16 ou 18 anos).

$idade = readline("Digite sua idade: ");

if (is_numeric($idade)) {

    if ($idade < 0 || $idade > 100){
        echo "Ou você não nasceu, ou é velho demais para isso. \n";
    }
    else {

        if ($idade >=0 && $idade < 12){
            echo "Classificação livre. \n";
        }
        else if ($idade >= 12 && $idade < 14){
            echo "Classificação até 13 anos. \n";
        }
        else if ($idade >=14 && $idade < 16 ){
            echo "Classificação até 15 anos. \n";
        }
        else if ($idade >= 16 && $idade < 18){
            echo "Classificação até 17 anos. \n";
        }
        else {
            echo "Classificação 18 anos ou mais. \n";
        }
    }

}
else {
    echo "Dígitos incorretos. \n";
}

?>