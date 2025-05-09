<?php

// Solicite 5 notas de um aluno, armazene-as e exiba a nota mais alta e a mais baixa.

$v = array();

for ($i = 0; $i < 5; $i++){
    $v[$i] = readline("Digite uma nota: ");
}

print_r($v);

echo "A maior nota foi: " . max($v) . "\n";
echo "A menor nota foi: " . min($v) . "\n";

?>