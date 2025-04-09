<?php

// Exercício 24 : Peça um valor e verifique se é possível sacá-lo com as cédulas disponíveis (200, 100, 50, 20, 10, 5, 2).

$valor = trim(readline("Digite o valor que deseja sacar: "));

if (!is_numeric($valor) || $valor < 2) {
    echo "Valor inválido para saque.\n";
    exit;
}

$valor = (int)$valor;

$ced200 = 0;
$ced100 = 0;
$ced50  = 0;
$ced20  = 0;
$ced10  = 0;
$ced5   = 0;
$ced2   = 0;

if ($valor >= 200) {
    $ced200 = intdiv($valor, 200);
    $valor %= 200;
}
if ($valor >= 100) {
    $ced100 = intdiv($valor, 100);
    $valor %= 100;
}
if ($valor >= 50) {
    $ced50 = intdiv($valor, 50);
    $valor %= 50;
}
if ($valor >= 20) {
    $ced20 = intdiv($valor, 20);
    $valor %= 20;
}
if ($valor >= 10) {
    $ced10 = intdiv($valor, 10);
    $valor %= 10;
}
if ($valor >= 5) {
    $ced5 = intdiv($valor, 5);
    $valor %= 5;
}
if ($valor >= 2) {
    $ced2 = intdiv($valor, 2);
    $valor %= 2;
}

if ($valor != 0) {
    echo "Não é possível sacar o valor exato com as cédulas disponíveis.\n";
} else {
    echo "Você receberá:\n";
    if ($ced200 > 0) echo "$ced200 cédula(s) de R$ 200\n";
    if ($ced100 > 0) echo "$ced100 cédula(s) de R$ 100\n";
    if ($ced50  > 0) echo "$ced50 cédula(s) de R$ 50\n";
    if ($ced20  > 0) echo "$ced20 cédula(s) de R$ 20\n";
    if ($ced10  > 0) echo "$ced10 cédula(s) de R$ 10\n";
    if ($ced5   > 0) echo "$ced5 cédula(s) de R$ 5\n";
    if ($ced2   > 0) echo "$ced2 cédula(s) de R$ 2\n";
}

?>