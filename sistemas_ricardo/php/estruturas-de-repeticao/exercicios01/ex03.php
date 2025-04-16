<?php 

// Crie um menu com as opções: 1 - Ver mensagem, 2 - Repetir menu, 0 - Sair.
// O menu deve ser exibido pelo menos uma vez e só parar quando o usuário escolher 0.

function menu(){

    $i = 0;
    $n = 0;
    while($n >=0 && $n <= 2){

        echo "1 - Ver mensagem \n";
        echo "2 - Repetir menu \n";
        echo "0 - Sair \n";
        $i ++;
        $n = readline("Escolhas uma das opções: \n");
        if ($n >=0 && $n <=2){
        switch ($n){
            case 1: 
                echo "------------------ \n";
                echo "VAI CORINTHIANS!!! \n";
                echo "------------------ \n";
                break;
            case 2: 
                echo menu();
            case 0:
                echo "Saindo do menu. \n";
                exit;
            }
        }
        else {
            echo "Número invalido, quer tentar novamente? \n";
            $resp = strtoupper(readline("[S/N]:  "));
            if ($resp == "s"){
                echo menu();
            }
            else {
                echo "Programa finalizado. \n";
                exit;
            }
        }
    }
}

$r = strtolower(readline ("Quer visualisar o menu? [S/N] \n"));
if ($r == "s"){
    echo menu();
}
else {
    echo "Programa finalizado. \n";
    exit; 
}
?>