<?php

// EXERCÍCIO 12 : Peça um nome de usuário e senha. Se forem "admin" e "1234", exiba "Acesso permitido"; senão, "Acesso negado".

$user = readline ("Usuário: \n");
$password = readline ("Senha: \n");

if ($user == "admin" && $password == "1234\n"){
    echo "Acesso permitido";
}
else
    echo "Acesso negado.";

?>