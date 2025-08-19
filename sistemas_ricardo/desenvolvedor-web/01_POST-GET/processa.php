<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];
$c_password = $_POST['c_password'];
$check = $_POST['check'];

echo "Os dados informados no formulário foram: <br>";
echo "Nome: $nome <br>";
echo "Email: $email <br>";
echo "Senha: $password <br>";
echo "C_Senha: $c_password <br>";

if ($check == true){
    echo "Deseja emprego? Sim <br>";
} else {
    echo "Deseja emprego? Não <br>";
}

?>