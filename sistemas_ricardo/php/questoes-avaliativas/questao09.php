<?php

// Questão 09 : Receba um usuário e senha. 
// Se forem iguais aos armazenados (admin e 1234), exiba "Acesso permitido", caso contrário, "Acesso negado". 

$usuario = readline("Digite o seu login: ");
$senha = readline("Digite sua senha: ");

if ($usuario == "admin" && $senha == "1234"){
    echo "Acesso permitido.";
}
else
    echo "Acesso negado.";
?>