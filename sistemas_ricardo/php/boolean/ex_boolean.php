<?php

$media = readline("Digite sua média: ");
$freq = readline("Qual a sua frequência em % : ");

if (($freq > 100 || $freq < 0) || ($media < 0 || $media > 10)){
    echo "Dados incorretos.";  
}
else { 
    if ($freq >= 70 && $freq <=100){

        if ($media >=0 && $media <5){
            echo "Reprovado por nota.\n";
        }
        else if ($media >=5 && $media <7){
            echo "Recuperação.\n";
        }
        else if ($media >=7 && $media <=10){
            echo "Aprovado.\n";
        }
    }
    else
        echo "Reprovado por frequência.";
}

?>