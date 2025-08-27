<?php

require_once 'layout/header.php';
require_once 'Carrinho.php';


session_start();

$nome = $_POST['nome'];
$preco = $_POST['preco'];

$id = isset($_POST['id'])? $_POST['id']:null;

$produto = new Produto($nome,$preco);

if ($id == null){
    $_SESSION['carrinho']->adicionarProduto($produto);
} else {
    $_SESSION['carrinho']->alterarProduto($id, $produto);
}

?>

<main class="container">
    <div class="grid">
        <div></div>
            <div>
                <h1> Produto adicionado com sucesso!</h1>
                <br>
                <div class="grid">
                    <button>
                        <a href="listar.php" class="contrast pico-color-gray-800">Listar Produtos</a>
                    </button>
                </div>
                <br>
                <div class="grid">
                    <button>
                        <a href="index.php" class="contrast pico-color-gray-800">Voltar</a>
                    </button>
                </div>
            </div>
        <div></div>
    </div>
</main>

<style>
    a {
        text-decoration: none;
    }
</style>

<?php
require_once 'layout/footer.php';
?>