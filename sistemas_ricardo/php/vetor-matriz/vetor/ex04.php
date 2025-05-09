<?php

// Solicite ao usuário 5 nomes e exiba-os na ordem em que foram digitados.

$v = array();
for ($i = 0; $i < 5; $i++){
    $v[$i] = readline ("Digite um nome: ");
}

sort ($v);
print_r($v);

?>