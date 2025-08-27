<?php

class Produto
{
    private $id;
    private $nome;
    private $preco;

    public function __construct($nome=null, $preco=null, $id=null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    // ATRIBUTOS GETTERS AND SETTERS PARA NOME:

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($valor)
    {
        $this->nome = $valor;
    }

    // ATRIBUTOS GETTERS AND SETTERS PARA PRECO:

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($valor)
    {
        $this->preco = $valor;
    }

}

?>