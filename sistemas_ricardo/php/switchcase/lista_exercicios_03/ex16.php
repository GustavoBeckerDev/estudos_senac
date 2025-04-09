<?php

// Exercício 16 : Peça as coordenadas (x, y) e informe 
// em qual dos 4 quadrantes do plano cartesiano o ponto está localizado

function coordenada($x, $y){

    $x = trim(readline("Digite o valor X da sua coordenada: "));
    $y = trim(readline("Digite o valor y da sua coordenada: "));

    if (!is_numeric($x) || !is_numeric($y)){
        echo "Valores informados incorretos, digite apenas números inteiros (negativos ou positivos). \n";
        exit;
    }
    $x = (int)$x;
    $y = (int)$y;

        if ($x == 0 && $y == 0){
            echo "É a origem do plano (ponto (0,0)) \n";
        }
        else if ($x == 0){
            echo "Se X for igual a 0, está no eixo Y \n";
        }
        else if ($y == 0){
            echo "Se Y for igual a 0, está no eixo X \n";
        }
        else {

            if ($x > 0 && $y > 0 ){
                echo "Ponto no 1º quadrante. \n";
            }
            else if ($x < 0 && $y > 0 ){
                echo "Ponto no 2º quadrante. \n";
            }
            else if ($x < 0 && $y < 0 ){
                echo "Ponto no 3º quadrante. \n";
            }
            else if ($x > 0 && $y < 0 ) {
                echo "Ponto no 4º quadrante. \n";
            }
        }
}

coordenada($x, $y);

?>
