<?php
 
// Questão 08 : Receba a idade de uma pessoa e classifique-a como:
// Criança (0-12), Adolescente (13-17), Adulto (18-59) ou Idoso (60+). 

$idade = readline ("Digite sua idade: ");

if ($idade >=0 && $idade <=12){
    echo "Você é criança.";
}
else if ($idade >=13 && $idade <=17){
    echo "Você é adolescente.";
}
else if ($idade >=18 && $idade <= 59){
    echo "Você é adulto.";
}
else if ($idade >=60){
    echo "Você é idoso.";
}
else 
    echo "Idade inválida, somente números positivos e inteiros.";
?>