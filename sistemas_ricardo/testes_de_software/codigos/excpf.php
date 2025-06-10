<?php

require 'testes.php';

// IMPLEMENTE UMA FUNÇÃO DE VALIDAÇÃO DE CPF QUE RECEBA UM CPF NO FORMATO "XXX.XXX.XXX-YY"

$cpf = trim(readline("Digite um CPF para saber se é válido: "));

assert(strlen($cpf)==14, "Número de dígitos diferente de 14");

$cpf = str_replace('.','-','/', "", $cpf);

assert(strlen($cpf)==11, "Número de dígitos diferente de 11");


// ------------------------------------------------

// Desconto -> deve retornar o valor final do produto
// valor orioginal e % de

// assert(desconto(100,10)==90, "Teste de desconto ok");

?>