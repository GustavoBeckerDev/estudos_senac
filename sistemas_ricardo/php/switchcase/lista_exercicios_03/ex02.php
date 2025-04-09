<?php

// Exercício 02 : Peça uma letra e informe se é vogal ou consoante, usando switch-case.

$letra = strtolower(readline("Digite uma letra: "));
$letra = trim($letra);

if (ctype_alpha($letra)){

switch ($letra){
    case "a":
        echo "A letra $letra é vogal.";
        break;
    case "e":
        echo "A letra . $letra . é vogal.";
        break;
    case "i":
        echo "A letra $letra é vogal.";
        break;
    case "o":
        echo "A letra $letra é vogal.";
        break;
    case "u":
        echo "A letra $letra é vogal.";
        break;
    default:
        echo "A letra $letra é consoante.";
}
}

else {
    echo "Caractere inválido.";
}

?>