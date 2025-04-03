<?php

// EXERCÍCIO 06 : Peça a idade de uma pessoa e diga se ela é criança (012), adolescente (13-17) ou adulta (18+).

$idade = readline ("Digite sua idade: ");

if ($idade <= 12){
    echo "Você é criança";
}
else if ($idade >12 && $idade <=17){
    echo "Você é adolescente.";
}
else 
    echo "Você é adulto.";
?>