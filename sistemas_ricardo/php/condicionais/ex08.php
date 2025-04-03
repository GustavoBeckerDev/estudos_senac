<?php

// EXERCÍCIO 08 : Leia o peso de uma pessoa e informe se está abaixo do peso (< 18,5), peso ideal (18,5 a 24,9) ou sobrepeso (≥ 25,0). 

$peso = readline ("Digite seu peso: ");

if ($peso < 18.5){
    echo "Você está abaixo do peso";
}
else if ($peso >=18.5 && $peso <25){
    echo "Você está no peso ideal";
}
else 
    echo "Você está com sobrepeso.";
?>
