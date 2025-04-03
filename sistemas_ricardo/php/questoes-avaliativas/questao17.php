<?php

// Questão 17 : Receba um horário e informe se está dentro do horário comercial (segunda a sexta, das 8h às 18h).

echo "Horário comercial\n";
$diasemana = readline("Digite o dia da semana [1 = Segunda, 2 = Terça, 3 = Quarta, 4 = Quinta, 5 = Sexta]: ");
$hora = readline("Digite a hora: ");

if (($diasemana >= 1 && $diasemana <=5) && ($hora >= 8 && $hora <=18)){
    echo "Horário comercial."
}
else
    echo "Dados incorretos.";
?>