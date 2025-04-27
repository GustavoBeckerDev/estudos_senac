<?php

// Crie um programa que faça uma pergunta ao usuário.
// O programa deve continuar pedindo a resposta até que o usuário responde corretamente.

echo "Qual é o maior time do Brasil ? \n";

do{
    $time = trim(strtolower(readline("Digite a resposta: ")));
    echo "51 é pinga, tente novamente. \n";
}
while ($time != "corinthians");

echo "Resposta correta! \n";

?>