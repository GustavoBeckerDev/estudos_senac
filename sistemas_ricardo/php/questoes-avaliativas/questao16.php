<?php

// Questão 16 : Receba um CPF no formato XXX.XXX.XXX-YY, verifique se ele tem 11 dígitos (ignorando os pontos e traços)
//  e exiba "Formato válido" ou "Formato inválido".

$doc = (readline("Digite seu CPF: "));
$doc = trim($doc);
$ndoc = str_replace(array('.','-','/'), "", $doc);
$ndoc = strlen($ndoc);

if ($ndoc == 11){
    echo "Formato válido.";
}
else
    echo "Formato inválido.";

?>