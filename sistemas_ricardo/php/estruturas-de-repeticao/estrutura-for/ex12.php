<?php

// CRIE UM PROGRAMA QUE PERCORRA OS NÚMEROS DE 1 A 50, SE O NÚMERO NÃO FOR MÚLTIPLO DE 5, O LAÇO DEVE IGNORAR ESSE NÚMERO, CASO CONTRÁRIO DEVE IMPRIMI-LO.

for($i=1;$i<=50;$i++){
    if ($i%5!=0){
        continue;
    }
    echo "O número $i é um múltiplo de 5. \n";
}

?>