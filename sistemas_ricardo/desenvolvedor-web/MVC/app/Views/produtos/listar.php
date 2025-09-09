<main class="container">
    <div class="column">
        <div></div>
        <div>

            <div class="head">
                <h1>Lista de Produtos</h1>
                <button>
                    <a href="produtos/cadastrar" style="color: white">Adicionar Produto</a>
                </button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Preço</th>
                        <th>Promoção</th>
                        <th>% Promoção</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($produtos as $produto):?>
                    <tr>
                        <td><?= $produto->nome?></td>
                        <td><?= $produto->descricao?></td>
                        <td><?= $produto->preco?></td>
                        <td><?= $promo = $produto->promocao?"Sim":"Não"?></td>
                        <td><?= $produto->taxa_promocao?></td>
                        <td>
                            <a href=""><img src="public/img/edit.png" alt=""></a>
                            <a href=""><img src="public/img/delete.png" alt=""></a>
                        </td>
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>

        </div>
        <div></div>
    </div>
</main>

<style>
    .head {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        margin-bottom: 20px;
    }

    h1 {
        color: black;
    }

    button {
        background-color: green;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
        border: 3px solid black;
    }

    a {
        text-decoration: none;
        color: white;
    }
    
    a:hover {
        text-decoration: underline;
    }

</style>