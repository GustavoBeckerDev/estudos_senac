<?php

// Exercício 06 : Peça o nome de um feriado e use switch-case para verificar se é nacional, estadual ou desconhecido.

function identificarferiado($data){

$feriados = [
    "01/01" => "Confraternização Universal",
    "21/04" => "Tiradentes",
    "01/05" => "Dia do Trabalho",
    "07/09" => "Independência do Brasil",
    "12/10" => "Nossa Senhora Aparecida",
    "02/11" => "Finados",
    "15/11" => "Proclamação da República",
    "25/12" => "Natal"
];

    if (array_key_exists($data, $feriados)){
        echo "Feriado nacional: " . $feriados[$data];
    }
    else {
        echo "Não é um feriado nacional. \n";
    }

}

$data = readline("Digite uma data (dd/mm): ");
echo identificarferiado($data);

?>