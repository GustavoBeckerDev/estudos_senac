<?php

// Exercício 22 : Peça a temperatura e classifique como muito frio (<10°C), frio (10-20°C), ameno (21-30°C) ou quente (>30°C).

$temp = trim(readline("Digite a temperatura em graus celsius °C: "));

if (!is_numeric($temp)){
    echo "Dígitos inválidos, digite apenas números. \n";
}

if ($temp <= 10){
    echo "Clima muito frio. \n";
}
else if ($temp > 10 && $temp <= 20 ){
    echo "Clima frio. \n";
}
else if ($temp > 20 && $temp <= 30){
    echo "Clima ameno. \n";
}
else {
    echo "Clime quente \n";
}

?>