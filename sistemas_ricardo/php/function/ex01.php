<?php

// PASSAGEM DE PARMÂMETRO POR VALOR:

function somar($a, $b){
    return $a + $b;
}

echo somar(1,1);

// PASSAGEM DE PARÂMETRO POR REFERÊNCIA:

function somar_ref($a, $b, &$resp){
    $resp = $a + $b;
}

echo somar_ref(1, 2, $resp);

print_r(str_split('passado com parametro de separação 2', 2));
print_r(str_split('passado sem parametro de separação'));


?>