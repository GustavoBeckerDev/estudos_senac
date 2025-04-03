<?php

// Questão 20 : Receba uma cor digitada pelo usuário e informe se é uma cor primária 
// (vermelho, azul ou amarelo) ou secundária (outras).

$cor = strtolower(readline("Digite uma cor: "));
$cor = trim($cor);

if ($cor == "azul" || $cor == "vermelho" || $cor == "amarelo"){
    echo "Cor primária";
}
else {
    echo "Cor secundária.";
}
?>
