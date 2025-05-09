<?php

// Crie um vetor com 5 números reais, calcule a média aritmética e mostre os números acima da média.

$soma = 0;

$v = array();
for ($i = 0; $i < 5; $i++){
    $v[$i] = readline("Digite um número: ");
    $soma+=$v[$i];
}

$media = $soma / 5;

echo "A média é: " . $media . "\n";

for ($i = 0; $i < 5; $i++){
if ($v[$i] > $media) {
    echo "O número " .$v[$i] . " é maior que a média: $media.\n";
}
}

?>