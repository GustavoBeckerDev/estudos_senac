<?php 

// Escreva um programa que escreve um númer aleatório entre 1 e 20. O usuário deve tentar adivinhar o número digitando valores.
// O programa deve continuar pedindo palpites até que o usuário acerte.
// Quando o usuário acerta, exiba uma mensagem dizendo que o usuário acertou.

$aleatorio = rand(1, 5);
$palpite = readline("Digite um número aleatório de 1 a 5: ");


while ($aleatorio != $palpite){
    $palpite = readline("Você errou, tente novamente: ");
}
echo "Você acertou. ";