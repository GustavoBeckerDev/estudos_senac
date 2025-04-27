<?php

// Faça um programa que receba a idade de dez pessoas e que calcule e mostre a quantidade de pessoas com idade maior ou igual a 18 anos.

for ($i=1; $i<=10;$i++){
    $nome = readline("Digite seu nome: ");
    $idade = readline("Digite sua idade: ");
    if ($idade >=18){
        echo "$nome tem $idade anos \n";
    }
}
?>