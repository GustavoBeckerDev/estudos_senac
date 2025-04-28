<?php

// Solicite ao usuário um número e determine quantos dígitos ele tem sem converter para string, usando while. 

$n = (int) readline("Digite um número: ");
$i = 0;

if ($n == 0) {
    $i = 1;
} else {
    while ($n > 0) {
        $n = intdiv($n, 10);
        $i++;
    }
}
echo "O número digitado tem $i dígito(s). \n";
?>