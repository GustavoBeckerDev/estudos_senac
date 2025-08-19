<?php

class Endereco 
{
    private $logradouro;
    private $nome;
    private $numero;
    private $bairro;
    private $cidade;
    private $cep;

    // LOGRADOURO: 

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setLogradouro($valor)
    {
        $this->logradouro = $valor;
    }

    // NOME :

    public function getNome()
    {
        return $this->nome;
    }

    public function setnome($valor)
    {
        $this->nome = $valor;
    }

    // NUMERO :

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($valor)
    {
        $this->numero = $valor;
    }

    // BAIRRO :

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setBairro($valor)
    {
        $this->bairro = $valor;
    }

    // CIDADE :

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setCidade($valor)
    {
        $this->cidade = $valor;
    }

    // CEP :

    public function getCep()
    {
        return $this->cep;
    }

    public function setCep($valor)
    {
        $this->cep = $valor;
    }


}

?>