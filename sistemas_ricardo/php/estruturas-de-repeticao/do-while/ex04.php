<?php

// Crie um programa que solicite ao usuário uma senha secreta (ex: 1234).
// Enquanto o usuário não digitar a senha correta, o programa deve continuar pedindo a senha.
// Quando a senha correta for inserite, exibir: "Acesso permitido" e finalizar a execução.

$senhasecreta = 1234;
$senha = readline ("Digite a senha: ");
$tent = 5;

while ($senha != $senhasecreta){
    $tent = $tent - 1;
    if ($tent > 0){
    echo "Senha incorreta, tente novamente. \n";
    echo "Você tem $tent tentativas. \n";
    $senha = readline("Digite a senha: ");
    }
    else {
        echo "Número de tentativas excedidos. \n";
        exit;
    }
}
echo "Acesso permitido. \n";
?>