<?php

require_once 'Endereco.php';

class Pessoa 
{
    // ATRIBUTOS (VARIÁVEIS):

        private $nome;
        private $sobrenome;
        private $dataNascimento;
        private Endereco $endereco;
        private $dataCadastro;

    // MÉTODOS (SETTERS & GETTERS) [FUNCTIONS]:

        // GET NOME:
        public function getNome() 
        {
            return $this->nome;
        }

        // SET NOME:
        public function setNome($valor)
        {
            $this->nome = $valor;
        }

        // GET SOBRENOME:
        public function getSobrenome() 
        {
            return $this->sobrenome;
        }

        // SET SOBRENOME:
        public function setSobrenome($valor)
        {
            $this->sobrenome = $valor;
        }

        // MÉTODO DE FALAR:
        public function saudar()
        {
            return "Olá, meu nome é $this->nome $this->sobrenome <br>";
        }

        // SET ENDERECO
        public function setEndereco(Endereco $endereco)
        {
            $this->endereco = $endereco;
        }

        // MÉTODO DE DIZER ENDEREÇO :
        public function dizerEndereco() 
        {
            echo "Moro em " . $this->endereco->getLogradouro() . 
            ' ' . $this->endereco->getNome() .
            ' ' . $this->endereco->getNumero() .
            ' ' . $this->endereco->getBairro() . 
            ' ' . $this->endereco->getCidade() . 
            ' ' . $this->endereco->getCep(); 
        }

}









?>