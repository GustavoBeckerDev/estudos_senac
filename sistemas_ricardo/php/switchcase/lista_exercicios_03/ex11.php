<?php

// Exercício 11 : Peça a idade e informe se pode dirigir. Se for menor de 18 mas tiver permissão especial, autorize também.

$idade = readline("Digite sua idade: ");
if (!is_numeric($idade)){
    echo "Dígitos incorretos. \n";
    exit;
}
    $idade = (int)$idade;
    if ($idade < 0 || $idade > 120){
        echo "Ou você ainda não nasceu, ou é velho demais para isso. \n";
        exit;
    }
        if ($idade >=18){
            echo "Você está apto para dirigir. \n";
        }
        else if ($idade >=16) {
            $permission = strtolower(trim(readline("Você tem permissão especial? [S/N]")));
            if (!ctype_alpha($permission)){
                echo "Resposta incorreta, digite apenas letras. \n";
                exit;
            }
                switch (substr($permission, 0, 1)) {
                    case "s":
                        echo "Você é de menor mas pode dirigir por conta da permissão especial. \n";
                        break;
                    case "n":
                        echo "Você não está apto para dirigir. \n";
                        break;
                    default:
                        echo "Resposta incorreta. \n";
                }
            }
        else {
            echo "Você não está apto para dirigir. \n";
        }
?>