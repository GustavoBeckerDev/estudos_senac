<?php

// Questão 07 : Receba três notas e calcule a média. 
// Se a média for ≥ 7, exiba “Aprovado”; se for ≥ 5 e < 7, exiba “Recuperação”; caso contrário, “Reprovado”. 

$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");
$n3 = readline("Digite a terceira nota: ");
$m = ($n1 + $n2 + $n3) / 3;
echo "Media : $m \n";
if ($m >= 7){
    echo "Aprovado.";
}
else if ($m >=5 && $m < 7){
    echo "Recuperação.";
}
else 
    echo "Reprovado.";
?>