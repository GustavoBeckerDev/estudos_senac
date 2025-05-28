<?php

// VARIÁVEIS PARA CONEXÃO AO MYSQL E AO BANCO DE DADOS 
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'subselect';

// ESTABELECE A CONEXÃO COM O BANCO DE DADOS UTILIZANDO A FUNÇÃO 'MYSQLI_CONNECT'
$conexao = mysqli_connect($host, $username, $password, $dbname);

// SE A CONEXÃO NÃO FOR ESTABELECIDA O SISTEMA É FECHADO COM UMA MENSAGEM.
if (!$conexao){
    die ("Não foi possível conectar.");
}

// CRIA SCRIP SQL 
$sqlselect = "select nome_funcionario as 'nome do funcionario',
            (select nome_departamento from departamento where departamento.id = funcionario.departamento_id) as 'nome do departamento',
            (select nome_cidade from cidade where cidade.id = funcionario.cidade_id) as 'nome da cidade'
            from funcionario";

// PEGA O RESULTADO DA CONSULTA, UTILIZANDO COMO PARÂMETRO A CONEXÃO E O SCRIP SQL
$resultado = mysqli_query($conexao, $sqlselect) 
or die ("Não foi possível conectar. ");

// SE O NUMERO DE LINHAS DESSE RESULTADO FOR MAIOR QUE 0 (OU SEJA, TENHA ELEMENTOS INSERIDOS NA TABELA)
// ELE VAI PEGAR TODOS OS ELEMENTOS COM FETCH ALL DA VARIÁVEL RESULTADO E COLOCAR EM REGISTROS
if (mysqli_num_rows($resultado) > 0){
    $registros = mysqli_fetch_all($resultado);
}

// PRINT_R COM FOR EACH PARA PERCORRER OS REGISTROS E MOSTRAR SEUS VALORES
foreach($registros as $values){
   print_r($values);
}

?>