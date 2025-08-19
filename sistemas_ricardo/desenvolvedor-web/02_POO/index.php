<?php

require 'Pessoa.php';

echo 'Intro POO  <br>';

$pessoa1 = new Pessoa(); // INSTANCIANDO A VARIÁVEL COM A CLASSE PESSOA
$pessoa2 = new Pessoa(); // INSTANCIANDO A VARIÁVEL COM A CLASSE PESSOA

$pessoa1->setNome('Gustavo');       // SETANDO UM VALOR PARA O ATRIBUTO NOME DA CLASSE PESSOA1
$pessoa1->setSobrenome('Becker');   // SETANDO UM VALOR PARA O ATRIBUTO SOBRENOME DA CLASSE PESSOA1

$pessoa2->setNome('Marcela');       // SETANDO UM VALOR PARA O ATRIBUTO NOME DA CLASSE PESSOA2
$pessoa2->setSobrenome('Tonello');  // SETANDO UM VALOR PARA O ATRIBUTO SOBRENOME DA CLASSE PESSOA2

echo "<br>";

$endereco = new Endereco();
$endereco->setLogradouro("Rodovia");
$endereco->setNome("Eugênio Muller");
$endereco->setNumero("1910");
$endereco->setBairro("São Judas");
$endereco->setCidade("Itajaí");
$endereco->setCep("88307030");

echo "<br>";
echo "PESSOA 1:";
echo "<br>";
$pessoa1->setEndereco($endereco);
echo $pessoa1->saudar();
$pessoa1->dizerEndereco();

echo "<br>";

echo "<br>";
echo "PESSOA 2:";
echo "<br>";
$pessoa2->setEndereco($endereco);
echo $pessoa2->saudar();
$pessoa2->dizerEndereco();

?>