<div class="content">
    <h1><?= htmlspecialchars($title) ?></h1>
    <p><?= htmlspecialchars($content) ?></p>
</div>


<form action="clientes" method="POST">

    <input type="submit" value="Submeter">

</form>

<style>
    .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
</style>