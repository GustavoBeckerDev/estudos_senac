<?php

// Exercício 06 : Apresente um menu com categorias de produtos. Ao escolher o número, exiba a categoria.
// 1 - Eletrônicos, 2 - Roupas, 3 - Livros, 4 - Alimento.

echo "Categorias: 1 - Eletrônicos, 2 - Roupas, 3 - Livros, 4 - Alimento \n";
$n = readline("Escolha uma categoria de produtos: ");

switch ($n){
    case 1:
        echo "1 = Eletrõnicos \n";
        break;
    case 2:
        echo "2 = Roupas \n";
        break;
    case 3:
        echo "3 = Livros \n";
        break;
    case 4:
        echo "4 = Alimentos \n";
        break;
    default:
        echo "Opção incorreta. \n";
}

?>