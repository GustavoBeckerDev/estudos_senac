<?php

// Exercício 17 : Promoção de ingressos para eventos: Se o cliente for VIP OU comprar mais 
// de 3 ingressos, recebe 20% de desconto. Caso contrário, paga o preço cheio.

$qtdingressos = trim(readline("Quantos ingressos você deseja: "));
$vip = trim(strtoupper(readline("Você é cliente VIP? [S/N]")));
$ingresso = 100;


if (!ctype_digit($qtdingressos)){
    echo "Dígitos incorretos, digite apenas números positivos. \n";
    exit;
}
if (!ctype_alpha($vip) || ($vip !== "S" && $vip !== "N")){
    echo "Dígito incorreto, digite apenas letras [S/N]. \n";
    exit;
}

$qtdingressos = (int)$qtdingressos;

    if ($qtdingressos >= 4 || $vip == "S"){
        echo "Você tem direito a 20% de desconto. \n";
        $ingresso = $ingresso - ($ingresso * 0.2);
    }

$total = $ingresso * $qtdingressos;

echo "Valor unitário: R$ " . number_format($ingresso, 2, ',', '.') . "\n";
echo "Quantidade de ingressos: $qtdingressos\n";
echo "Valor total a pagar: R$ " . number_format($total, 2, ',', '.') . "\n";

?>