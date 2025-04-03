<?php

// Cálculo de Raízes
// Atividade avaliativa 1: Receba três números a, b e c e calcule as raízes da equação 
// do segundo grau (ax² + bx + c = 0), usando a fórmula de Bhaskara. Verifique se as 
// raízes são reais antes de calcular

// Recebe os valores de a, b e c
$a = readline("Informe o 1º número para a: ");
$b = readline("Informe o 2º número para b: ");
$c = readline("Informe o 3º número para c: ");

// Verifica se 'a' é diferente de zero, pois se 'a' for zero não é uma equação do 2º grau
if ($a == 0) {
    echo "Isso não é uma equação do segundo grau. O valor de 'a' não pode ser zero.\n";
} else {
    // Calculando o delta
    $delta = $b * $b - 4 * $a * $c;

    // Verificando o valor de delta
    if ($delta > 0) {
        // Duas raízes reais e distintas
        $raiz1 = (-$b + sqrt($delta)) / (2 * $a);
        $raiz2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Raiz 1: $raiz1 <br />";
        echo "Raiz 2: $raiz2 <br />";
    } elseif ($delta == 0) {
        // Uma raiz real (raiz dupla)
        $raiz1 = $raiz2 = -$b / (2 * $a);
        echo "Raiz 1 e Raiz 2 (iguais): $raiz1 <br />";
    } else {
        // Raízes complexas
        $real = -$b / (2 * $a);
        $img = sqrt(-$delta) / (2 * $a);
        $raiz1 = $real . " + i" . $img;
        $raiz2 = $real . " - i" . $img;
        echo "Raiz 1: $raiz1 <br />";
        echo "Raiz 2: $raiz2 <br />";
    }
}
?>
