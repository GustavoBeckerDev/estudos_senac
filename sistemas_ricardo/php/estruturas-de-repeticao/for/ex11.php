<?php

// CRIE UM PROGRAMA QUE PERCORRA DE 1 A 10, E O NÚMERO FOR ÍMPAR, O LAÇO DEVE IGNORAR O NÚMERO, SE FOR PAR IMPRIMA NA TELA.

for($i=0;$i<=10;$i++){
    if ($i%2!=0){
        continue;
    }
    echo "O número $i é par. \n";
}

?>