<?php

// Escreva um programa que peça ao usuário para inserir um número positivo.
// O programa deve continuar pedindo ao usuário o número até que um número positivo seja fornecido.
// Quando o número fornecido for válido, escreva ao usuário "Número Válido".

echo "Informe um número positivo: \n";

do {
    $n = readline("Número: \n");
}
while ($n < 0);
echo "Número válido. \n";

?>