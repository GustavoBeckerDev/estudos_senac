<?php

// Exercício 07 : Peça as notas de Matemática e Português. O aluno só é aprovado se tiver nota ≥7 nas duas disciplinas.

$notaM = readline("Nota na disciplina Matemática: ");
$notaP = readline("Nota na disciplina Português: ");
$notaM = trim($notaM);
$notaP = trim($notaP);

if (is_numeric($notaM) && is_numeric($notaP)) {

    if (($notaM < 0 || $notaP < 0 ) || ($notaM > 10 || $notaP > 10)){
        echo "Nota inválida. \n";
    }

    else {

        if ($notaM >= 7 && $notaP >= 7){
            echo "Aluno aprovado.\n";
        }
        else {
            echo "Aluno reprovado. \n";
        }
    }
}

else {
    echo "Dígito(s) incorreto(s). \n";
}


?>