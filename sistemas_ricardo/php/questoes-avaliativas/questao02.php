<?php

// Receba uma temperatura em Fahrenheit e converta para Celsius. Exiba a temperatura e informe SE está abaixo OU acima de 0º.

$faren = readline("Digite uma temperatura em Fº para convertar para Cº: \n");

$celsius = ($faren - 32) / 1.8;

echo "Convertendo $faren °F para Celsius ficará $celsius °C.\n";

if ($faren < 0){
    echo "A temperatura está baixo de 0°.\n";
}
else
    echo "A temperatura está igual ou acima de 0°.\n";

?>