<?php

// Exercício 20 : Peça uma senha e verifique se contém letras maiúsculas, números e caracteres especiais.

$senha = readline("Senha: ");

if (preg_match('/[A-Z]/', $senha) && preg_match('/[0-9]/') && preg_match('/[^a-zA-Z0-9]/')) {
    echo "SENHA FORTE. \n";
}
else {
    echo "SENHA FRACA. \n";
}

?>

