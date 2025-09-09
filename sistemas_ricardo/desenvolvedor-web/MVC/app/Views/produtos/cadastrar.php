<main class="container">
    <div class="grid">
        <div></div>
        <div>
            <form action="salvar" method="post">
                <fieldset>
                    <label>
                        Nome
                        <input type="text" placeholder="Nome do Produto" name="nome">
                    </label>
                    <label>
                        Descrição
                        <input type="text" placeholder="Descrição do Produto" name="descricao">
                    </label>
                    <label>
                        Preço
                        <input type="text" placeholder="Preço do Produto" name="preco">
                    </label>
                    <fieldset>
                        <legend>Promoção</legend>
                        <input type="radio" name="desconto">
                        <label>
                            Sim
                        </label>
                        <input type="radio" name="desconto">
                        <label>
                            Não
                        </label>
                    </fieldset>
                    <label>
                        % Desconto
                        <input type="text" placeholder="Taxa de desconto" name="taxa_promocao">
                        <input type="submit" value="Cadastrar">
                        <button>
                            <a href="/produtos" style="color: white">Voltar</a>
                        </button>
                    </label>
                </fieldset>
            </form>
        </div>
        <div></div>
    </div>
</main>