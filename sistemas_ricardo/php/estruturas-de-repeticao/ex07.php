<?php

// Peça ao usuário que digite um número N, o programa deve exibir uma contagem regressiva a partir de N até 1 utilizando do...while. 

$n = readline("Digite um número: ");

do{
    if ($n > 1){
        echo "Restam $n números. \n";
        $n-=1;
    }
    else {
        echo "Resta $n número. \n";
    }
}
while($n > 0);

?>