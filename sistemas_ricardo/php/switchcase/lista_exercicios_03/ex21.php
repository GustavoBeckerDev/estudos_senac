<?php

// Exercício 21 : Peça o salário e classifique a alíquota de imposto de acordo com as faixas da Receita Federal. 

$salario = trim(readline("Digite seu salário: "));

if (!is_numeric($salario) || $salario < 0){
    echo "Digite o salário em formato válido. \n";
    exit;
}

if ($salario >=0 && $salario <= 2112){
    echo number_format($salario, 2, ',', '.');
    echo "Isento de alíquota. \n";
    echo "Não paga IR \n";
}
else if ($salario > 2112 && $salario <= 2826.65){
    echo number_format($salario, 2, ',', '.');
    echo "Alíquota de 7.5% \n";
    echo "Parcela a deduzir do IR: R$ 158.4 \n";
}
else if ($salario > 2826.65 && $salario <= 3751.05){
    echo number_format($salario, 2, ',', '.');
    echo "Alíquota de 15% \n";
    echo "Parcela a deduzir do IR: R$ 370.4 \n";
}
else if ($salario > 3751.05 && $salario <= 4664.68){
    echo number_format($salario, 2, ',', '.');
    echo "Alíquota de 22.5% \n";
    echo "Parcela a deduzir do IR: R$ 651.73 \n";
}
else {
    echo number_format($salario, 2, ',', '.');
    echo "Alíquota de 27.5% \n";
    echo "Parcela a deduzir do IR: R$ 884.96 \n";
}

?>