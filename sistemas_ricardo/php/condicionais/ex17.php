<?php 

// EXERCÍCIO 17 : Peça uma letra e informe se é vogal ou consoante.

$letra = readline("Digite uma letra para saber se é vogal ou consoante: \n");
$letra = strtolower($letra);

if (($letra == "a") || ($letra == "e") || ($letra == "i") || ($letra == "i") || ($letra == "o") || ($letra == "u")){
    echo $letra . " é vogal.";
}
else 
    echo $letra . " é consoante.";

?>