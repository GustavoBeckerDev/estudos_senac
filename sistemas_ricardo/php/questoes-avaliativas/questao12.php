<?php

// Questão 12 : Receba três lados e verifique se podem formar um triângulo.
// Se puderem, informe o tipo (equilátero, isósceles ou escaleno).

$lado1 = readline("Valor do 1º lado: ");
$lado2 = readline("Valor do 2º lado: ");
$lado3 = readline("Valor do 3º lado: ");

if ($lado1 > 0 && $lado2 > 0 && $lado3 > 0) {

    if ($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1) {
        
        if ($lado1 == $lado2 && $lado2 == $lado3) {
            echo "Triângulo Equilátero.";
        } 
        elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            echo "Triângulo Isósceles.";
        } 
        else {
            echo "Triângulo Escaleno.";
        }
    } 
    else {
        echo "Os valores informados **não formam um triângulo**.";
    }
} 
else {
    echo "Os valores devem ser maiores que zero.";
}
?>