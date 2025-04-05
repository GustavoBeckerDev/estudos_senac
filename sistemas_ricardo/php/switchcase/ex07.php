<?php

// Exercício 07 : Sistema de jogo: escolha um nível e o sistema responde com uma mensagem.
// 1 - Fácil, 2 - Médio, 3 - Difícil, 4 - Impossível.

$nivel = readline("Escolha a dificuldade de 1 a 4: ");

switch ($nivel){
    case 1:
        echo "N[ivel 1 = Fácil. \n";
        break;
    case 2:
        echo "Nível 2 = Médio. \n";
        break;
    case 3:
        echo "Nível 3 = Difícil. \n";
        break;
    case 4:
        echo "Nível 4 = Impossível. \n";
        break;
    default:
        echo "Opção incorreta. \n";
}

?>