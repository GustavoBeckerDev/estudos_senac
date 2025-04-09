<?php

// Exercício 12 : Peça a quantidade de vagas disponíveis e a quantidade de pessoas que querem entrar.
// Se não houver espaço suficiente, negue a entrada.

$vagas = trim(readline("Qual a quantidade de vagas disponíveis ?"));
$pessoas = trim(readline("Quantas pessoas querem entrar no local? "));

if (!ctype_digit($pessoas) || !ctype_digit($vagas)){
    echo "Entrada de dados incorreta, digite apenas números inteiros e positivos. \n";
    exit;
}

$vagas=(int)$vagas;
$pessoas=(int)$pessoas;

if ($pessoas > $vagas){
    echo "A quantidade de pessoas ultrapasa a capacidade do local. \n";
}
else {
    echo "Há vagas para esta quantidade de pessoas. \n";
}

?>