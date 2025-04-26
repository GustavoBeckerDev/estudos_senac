<?php

// CRIE UM PROGRAMA QUE PERCORRE UMA LISTA DE 1 A 30 E PARE QUANTO ENCONTRAR UM MÚLTIPLO DE 7.

for ($i=0;$i<=30;$i++){
    if ($i==0){
        continue;
    }
    if ($i%7==0){
        echo "O número $i é divisível por 7 \n";
    }
}

?>