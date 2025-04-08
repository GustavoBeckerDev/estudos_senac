<?php

// Peça o nome de um feriado e use switch-case para verificar se é nacional, estadual ou desconhecido.

$feriado = strtolower(readline("Digite o nome de um feriado: "));
$feriado = trim($feriado);
$feriado = str_replace ("-", "", $feriado);

if (ctype_alpha($feriado)){

    switch($feriado) {
        case "sextafeirasanta":
            echo "Feriado nacional. \n";
            break;
        case "tiradentes":
            echo "Feriado nacional. \n";
            break;
        case "diadotrabalhador":
            echo "Feriado nacional. \n";
            break;
        case "corpuschristi":
            echo "Feriado nacional. \n";
            break;
            
        
        





    }

}
else {
    echo "Entrada de dados incorreta. \n";
}

?>