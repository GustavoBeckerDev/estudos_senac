<?php
// Leia números inteiros até que a soma deles ultrapasse 100, então exiba a soma total. 
$soma = 0;
$i = 1;
do {
    $n = readline("Digite um número inteiro: ");
    $soma += $n;
    $i++;
}while ($soma <= 100);
echo "A soma de todos os valores digitados foi: $soma \n";
?>