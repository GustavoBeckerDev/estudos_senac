<?php 

require_once 'layout/header.php'; 
require_once 'Carrinho.php';

session_start();
if (!isset($_SESSION['carrinho']))
{
    $_SESSION['carrinho'] = new Carrinho();
}

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $produto = $_SESSION['carrinho']->buscarItem($id);
} else {
    $produto = new Produto();
}

?>

<main class="Container">

    <div class="grid">
        <div></div>
        <div>
            <div></div>
            <form action="adicionar.php" method="POST">

                <input type="hidden" name="id" value="<?= $id ?>">

                <label>
                    Nome:
                    <input type="text" name="nome" id="" placeholder="Nome do produto" value="<?php echo $produto->getNome()?>">
                </label>

                <label>
                    Preço:
                    <input type="text" name="preco" id="" placeholder="Preço do produto" value="<?php echo $produto->getPreco()?>">
                </label>

                <input type="submit" name="submit" value="<?= isset($id) ? "Editar":"Cadastrar" ?>">

            </form>

            <div class="grid">
                <button>
                    <a href="listar.php" class="contrast pico-color-gray-800">Listar Produtos</a>
                </button>
            </div>


            <div></div>
        </div>
        <div></div>
    </div>

</main>

<?php require_once 'layout/footer.php'; ?> 



