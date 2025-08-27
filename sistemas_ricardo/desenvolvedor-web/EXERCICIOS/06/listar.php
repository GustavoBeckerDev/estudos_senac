<?php 
require_once 'layout/header.php';
require_once 'Carrinho.php';
?>

<main class="container">
    <div class="grid">
    <div>

        <?php
            session_start();
            $carrinho = $_SESSION['carrinho'];
            if (empty($carrinho->getItens())){ ?>
            <div class="container">
                <div class="grid">
                    <div></div>
                    <div></div>
                    <div>
                        <h4>Não há itens no carrinho.</h4>
                    </div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            <?php
            }
            else { 
        ?>

            <table>
                <thead>
                    <tr>
                        <td>Indice</td>
                        <td>Nome</td>
                        <td>Preço</td>
                        <td>Opções</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        <?php
                            foreach($carrinho->listarProduto() as $id=> $item)
                            {
                                echo "<tr>";
                                echo "<td>". $id . "</td>";
                                echo "<td>". $item->getNome() . "</td>";
                                echo "<td>". $item->getPreco() . "</td>";
                                echo "<td> 
                                    <a href='index.php?id=".$id."'><img src='img/edit.png' alt='Editar'></a> 
                                    <a href='excluir.php?id=".$id."'><img src='img/delete.png' alt='Excluir'></a>
                                    </td>";
                                echo "</tr>";
                            }
                        }
                        ?>

                    </tr>
                </tbody>
            </table>

    </div>
    </div>

    <div class="grid">
            <div></div>
            <div></div>
            <div></div>
                    <button><a href="index.php" class="contrast pico-color-gray-800">Voltar</a></button>
            <div></div>        
            <div></div>
            <div></div>
    </div>
</main>




<?php 
require_once 'layout/footer.php'
?>