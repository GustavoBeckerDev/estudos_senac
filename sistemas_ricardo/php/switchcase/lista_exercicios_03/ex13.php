<?php

// Exercício 13 : Peça um e-mail e verifique se contém "@" e ".", garantindo que esteja no formato correto.

$email = readline("Digite seu email: ");

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email válido. \n";
}
else {
    echo "Email inválido. \n";
}

?>