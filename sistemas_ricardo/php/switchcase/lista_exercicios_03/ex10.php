<?php

// Exercício 10 : Peça a idade e classifique o atleta nas categorias juvenil, adulto ou master.

$idade = readline("Digite sua idade para saber a categoria em que se encaixa: ");

if (is_numeric($idade)) {

    if ($idade < 0 || $idade > 120){
        echo "Ou você não nasceu, ou é velho demais para isso. \n";
    }
    else {

        if ($idade >=0 && $idade < 12){
            echo "Idade insuficiente. \n";
        }
        else if ($idade >= 12 && $idade <= 17){
            echo "Classificação Juvenil. \n";
        }
        else if ($idade >=18 && $idade < 40 ){
            echo "Classificação Adulto. \n";
        }
        else {
            echo "Classificação Master. \n";
        }
    }

}
else {
    echo "Dígitos incorretos. \n";
}

?>