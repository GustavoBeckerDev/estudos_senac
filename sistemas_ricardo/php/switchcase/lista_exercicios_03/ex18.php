<?php

// Exercício 18 : Peça a idade e o tempo de contribuição e informe se a pessoa pode se aposentar.

$sexo = trim(strtoupper(readline("Qual o seu sexo: [M/F]")));
$idadestr = trim(readline("Digite sua idade: "));
$contribuicaostr = trim(readline("Quanto tempo de contribuição (anos): "));

if (!ctype_digit($idadestr) || !ctype_digit($contribuicaostr)){
    echo "Dígitos inválidos, digite apenas números positivos. \n";    
    exit;
}
$idade = intval($idadestr);
$contribuicao = intval($contribuicaostr);

if (!ctype_alpha($sexo)){
    echo "Dígitos inválidos, digite apenas letras [M ou F] para o sexo. \n";
    exit;
}
    
if ($idade < 0 || $contribuicao < 0) {
    echo "Idade ou contribuição incorreta. \n";
}
else {

    switch($sexo){
        case "M":
            if ($idade >= 65 || $contribuicao >= 35){
                echo "Você ja pode se aposentar. \n";
            }
            else {
                echo "Você ainda não pode se aposentar. \n";
            }
            break;
        case "F":
            if ($idade >= 62 || $contribuicao >= 30){
                echo "Você ja pode se aposentar. \n";
            }
            else {
                echo "Você ainda não pode se aposentar. \n";
            }
            break;
        default:
            echo "Sexo incorreto, favor informar [M/F]. \n";
    }
}

?>