<?php

// Exercício 05 : Se o pagamento for à vista, aplique 10% de desconto; se for no cartão, 5%; se for parcelado, não aplique desconto.

echo "Formas de pagamento. \n";
echo "1 = À vista, 2 = Cartão, 3 = Cartão parcelado. \n";
$pagamento = readline("Qual a forma de pagamento? ");
$pagamento = trim($pagamento);
$valor = readline("Digite o valor da compra: ");

if (ctype_digit($pagamento)){

    switch($pagamento){
        case 1:
            echo "Pagamento à vista. \n";
            $vt = $valor - ($valor * 0.1);
            echo "Valor com desconto: $vt ";
            break;
        case 2:
            echo "Pagamento no cartão. \n";
            $vt = $valor - ($valor * 0.05);
            echo "Valor com desconto: $vt ";
            break;
        case 3:
            echo "Pagamento no cartão parcelado. \n";
            echo "Forma de pagamento não se aplica desconto. \n";
            break;
        default:
            echo "Opção incorreta. \n";
    }

}
else {
    echo "Entrada incorreta. \n";
}

?>