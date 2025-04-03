<?php

// Questão 13 : Receba o dia e mês de nascimento de uma pessoa e exiba o signo correspondente.

$dia = readline("Digite o dia do seu nascimento: ");
$mes = readline("Digite o mês do seu nascimento: ");

if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)){
    echo "Signo Áries.";
}
else if (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)){
    echo "Signo Touro.";
}
else if (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)){
    echo "Signo Gêmeos.";
}
else if (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)){
    echo "Signo Câncer.";
}
else if (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)){
    echo "Signo Leão.";
}
else if (($mes == 9 && $dia >= 23) || ($mes == 9 && $dia <= 22)){
    echo "Signo Virgem.";
}
else if (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)){
    echo "Signo Libra.";
}
else if (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)){
    echo "Signo Escorpião.";
}
else if (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)){
    echo "Signo Sagitário.";
}
else if (($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19)){
    echo "Signo Capricórnio.";
}
else if (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)){
    echo "Signo Aquário.";
}
else if (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)){
    echo "Signo Áries.";
}
else
    echo "Dia e/ou mês inválidos."
?>