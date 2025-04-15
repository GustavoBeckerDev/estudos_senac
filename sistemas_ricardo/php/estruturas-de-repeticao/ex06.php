<?php

// Cire um programa que faça uma perunta ao usuário.
// O programa deve continuar pedindo a resposta até que o usuário responde corretamente.

echo "Qual foi o último time brasileiro campeão do mundo? \n";

do{
    $time = trim(strtolower(readline("Digite a resposta: ")));
    echo "51 é pinga, tente novamente. \n";
}
while ($time != "corinthians");

echo "Resposta correta! \n";

?>