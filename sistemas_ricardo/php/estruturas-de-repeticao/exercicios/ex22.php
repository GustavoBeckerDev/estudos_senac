<?php

// Solicite um número e ignore os múltiplos de 4 ao exibir os números de 1 até N, utilizando continue. 

$n = readline("Digite um número: ");

for ($i=1; $i <= $n; $i++){
   if ($i % 4 == 0){
    continue;
   } 
   echo "$i \n";
}

?>