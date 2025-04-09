<?php

// Exercício 04 : Peça um CPF e verifique se tem 11 dígitos (ignorando pontos e traços).

$cpf = readline("Digite seu CPF: ");

$cpf = str_replace('.', "", $cpf);
$cpf = str_replace('-', "", $cpf);

if (ctype_digit($cpf)){

    if (strlen($cpf) == 11){
        echo "CPF com 11 dígitos. ";
    }
    else {
        echo "CPF inválido.";
    }

    }
    else {
        echo "Entrada incorreta.";
}

?>