<?php

// Questão 11 : Receba a idade de um nadador e classifique-o de acordo com as categorias:
// Infantil A (5-7 anos) Infantil B (8-10 anos) Juvenil A (11-13 anos) Juvenil B (14-17 anos) Adulto (18+ anos).

$idade = readline("Digite sua idade: ");

if ($idade >= 5 && $idade <= 7){
    echo "Categoria Infantil A.";
}
else if ($idade >= 8 && $idade <= 10){
    echo "Categoria Infantil B.";
}
else if ($idade >= 11 && $idade <= 13){
    echo "Categoria Juvenil A.";
}
else if ($idade >= 14 && $idade <= 17){
    echo "Categoria Juvenil B.";
}
else if ($idade >= 18){
    echo "Categoria Adulto.";
}
else 
    echo "Idade insuficiente.";
?>