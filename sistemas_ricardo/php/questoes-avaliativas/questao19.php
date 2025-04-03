<?php

// Questão 19 : Receba uma nota de 0 a 10 e converta para conceitos:  A (9-10),  B (7-8.9),  C (5-6.9),  D (<5).

$nota = readline("Digite sua nota: ");

 if ($nota >=0 && $nota < 5){
    echo "D";
}
else if ($nota >=5 && $nota <= 6.9){
    echo "C";
}
else if ($nota >=7 && $nota <= 8.9){
    echo "B";
}
else if ($nota >=9 && $nota <=10){
    echo "A";
}
else 
    echo "Nota incorreta, tente novamente.";
?>