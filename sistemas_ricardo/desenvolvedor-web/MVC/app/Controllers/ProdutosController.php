<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Produto;


class ProdutosController extends Controller
{
    public function index()
    {

    
        $produtoModel = new Produto();
        $produtos = $produtoModel->listarTodos();

        $data = [
            'title' => 'Lista de Produtos',
            'produtos' => $produtos
        ];
	
        $this->view('layouts/header', ['titulo' => 'BODEGA']); // CHAMA O HEADER
        $this->view('produtos/listar', $data); // CHAMA O MÉTODO INDEX DA VIEW PRODUTOS
        $this->view('layouts/footer'); // CHAMA O FOOTER

    }

    public function ver($id = 0)
    {
        $produtoModel = $this->model('Produto');
        $produto = $produtoModel->buscarPorId((int)$id);

        $data = [
            'title' => $produto->nome ?? 'Produto não encontrado',
            'produto' => $produto
        ];
	var_dump($data);
//        $this->view('produtos/ver', $data);
    }

    public function cadastrar()
    {
        $this->view('layouts/header'); // CHAMA O HEADER
        $this->view('produtos/cadastrar'); // CHAMA A VIEW DE CADASTRAR
        $this->view('layouts/footer'); // CHAMA O FOOTER


    }

    public function salvar()
    {
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $desconto = $_POST['desconto'];
        $taxa_promocao = $_POST['taxa_promocao'];

        $produtoModel = new Produto();
        $data=[
            'nome' => $nome,
            'descricao' => $descricao,
            'preco' => $preco,
            'promocao' => $desconto,
            'taxa_promocao' => $taxa_promocao
        ];
        $produtoModel->create($data);
        $this->redirect('/ProgramadorWebSenac/MVC/produtos');

    }
}
