<?php

// Exercício 02 : Peça ao usuário para escolher um tipo de combustível digitando G (Gasolina), E (Etanol) ou D (Diesel).
// Exiba o nome completo do combustível escolhido.

echo "-----Escolha um combustível-----\n";
$combustivel = strtolower(readline("DIGITE : G = gasolina, E = Etanol, D = Diesel "));
$combustivel = trim($combustivel);

if ($combustivel != "g" && $combustivel != "e" && $combustivel != "d"){
    echo "Opção incorreta.";
}
else
    switch ($combustivel){

    case "g":
        echo "G = GASOLINA.";
        break;
    case "e":
        echo "E = ETANOL.";
        break;
    case "d":
        echo "D = DIESEL.";
        break;
}
?>