<?php

// Usuário digita um número de 1 a 7 e o sistema mostra a nota musical correspondente:
// 1 - Dó , 2 - Ré , 3 - Mi , 4 - Fá , 5 - Sol , 6 - Lá ,  7 - Si .

$n = readline("Digite um número de 1 a 7 para saber a nota musical correspondente: ");

switch ($n){
    case 1:
        echo "1 = Nota DÓ (C) \n";
        break;
    case 2:
        echo "2 = Nota RÉ (D) \n";
        break;
    case 3:
        echo "3 = Nota MI (E) \n";
        break;
    case 4:
        echo "4 = Nota Fá (F) \n";
        break;
    case 5:
        echo "5 = Nota SOL (G) \n";
        break;
    case 6:
        echo "6 = Nota LÁ (A) \n";
        break;
    case 7:
        echo "7 = Nota SI (B) \n";
        break;
    default:
        echo "Opção inválida \n";
    }
?>