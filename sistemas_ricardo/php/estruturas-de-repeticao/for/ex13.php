<?php

// Faça um script que calcule a soma de todos os números múltiplos de 3 entre 1 e 50.

$soma=0;
for($i=1; $i<=50; $i++){
    if ($i%3==0){
        $soma+=$i;
    }
}

echo $soma;
?>