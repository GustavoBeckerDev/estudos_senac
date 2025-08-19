<?php include 'layout/header.php' ?>

<main class="container">

    <div class="grid">
        <div></div>
            <div>
                <form action="processa.php" method="POST">
                    <fieldset>

                        <label>
                            Nome:
                            <input type="text" name="nome" placeholder="Digite seu nome"/>
                        </label>

                        <label>
                            Email:
                            <input type="email" name="email" placeholder="Digite seu email"/>
                        </label>

                        <label>
                            Senha:
                            <input type="password" name="password" placeholder="Digite sua senha"/>
                        </label>

                        <label>
                            <input type="password" name="c_password" placeholder="Confirmar senha"/>
                        </label>

                        <label>
                            Procuro emprego
                            <input type="checkbox" name="check"/>
                        </label>

                        <label>
                            <input type="submit" value="cadastrar" name="cadastrar"/>
                            <input type="reset" value="cancelar" name="cancelar"/>
                        </label>

                    <fieldset>
                </form>
            </div>
        <div></div>
    </div>

</main>

<?php include 'layout/footer.php' ?>