<?php

//	Leia um número N e exiba os números de 1 até N, mas interrompa o loop se encontrar um número divisível por 7, usando break. 

$n = readline("Digite um número: ");

for ($i = 1; $i <= $n; $i++){
    if ($i % 7 == 0){
        echo "Foi encontrado um número divisível por 7, programa finalizado. \n";
        break;
    }
    echo "$i \n";
}
?>