<?php

// EXERCÍCIO 09 : Peça a idade de um atleta e classifique como infantil (até 12 anos), juvenil (13 a 17) ou adulto (18+).  

$idade = readline ("Digite sua idade: ");

if ($idade <= 12){
    echo "Atleta classificado como infantil.";
}
else if ($idade >12 && $idade <=17){
    echo "Atleta classificado como juvenil.";
}
else 
    echo "Atleta classificado como adulto.";
?>