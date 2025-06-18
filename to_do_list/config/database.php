<?php

// CONEXÃO COM BANCO DE DADOS POO

class dataBase {

    private $host = 'localhost';
    private $dbname = 'todo_list';
    private $username = 'root';
    private $password = '';
    
    private $conn;

    public function getConection (){
        $this->conn = null;

    try {

        // INSTANCIANDO O ATRIBUTO CONN COMO UM NOVO OBJETO PDO
        $this->conn = new PDO(
            "mysql:host=" . $this->host . ";dbname=" . $this->dbname,
            $this->username,
            $this->password
        );

        // DEFINE O TRATAMENTO DE ERROS E RETORNO DE DADOS.

        // A EXCESSÃO É CAPTURADA NO BLOCO CATCH, COM UMA MENSAGEM DE ERRO.
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // FETCH ASSOC ORGANIZA O RETORNO DO ARRAY UTILIZANDO CHAVE->VALOR
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    } catch (PDOException $e){
        echo "Erro de conexão" . $e->getMessage();
    }

    return $this->conn;
    echo "Passou aqui. \n";
    }
}

?>