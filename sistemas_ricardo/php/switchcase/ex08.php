<?php

// Exercício 08 : Usuário digita uma cor e o sistema responde com a ação:
// Verde → Siga | Amarelo → Atenção | Vermelho → Pare

$cor = strtolower(readline("Digite uma das 3 cores do sinal de trânsito: "));
$cor = trim($cor);

switch ($cor){
    case "verde":
        echo "Cor verde = Siga! \n";
        break;
    case "amarelo":
        echo "Cor amarela = Atenção! \n";
        break;
    case "vermelho":
        echo "Cor vermelha = Pare! \n";
        break;
    default:
        echo "Cor incorreta. \n";
}

?>