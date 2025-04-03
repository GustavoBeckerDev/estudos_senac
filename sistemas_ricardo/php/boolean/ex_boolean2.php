<?php

echo "Processo de Triagem\n";
echo "[ Digite 1 = Idade >= 60 e/ou  2 = Doença crônica grave e/ou  3 = Paciente grávida ou 4 = Atendimento normal ]\n";
$atend = readline("Para atendimento prioritário digite: ");


if ($atend > 0 && $atend <= 4){

    if ($atend < 1 || $atend > 3){
        echo "Atendimento normal";
    }
    else 
        echo "Atendimento prioritário.";

}
else 
    echo "Número incorreto.";

?>