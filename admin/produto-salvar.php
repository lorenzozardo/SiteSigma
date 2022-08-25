<?php
// inclui a conexao com o banco de dados
include_once '../includes/_dados.php';
// inclui o head e header da pagina admin
include_once '_head.php';

$sql = "SELECT * FROM categorias";
$resultado = mysqli_query($conn, $sql);

?>

<main>
    <h2>Administração dos Produtos</h2>

    <form action="categoria-processa.php" method="post">
        <input type="text" value="salvar" name="acao">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br>
        <label for="descricao">Descrição</label><br>
        <textarea id="descricao" name="descricao"></textarea><br>
        <label for="categoria">Categoria:</label><br>
        <select name="valor">
            <?php
            while ($dado = mysqli_fetch_array($resultado)) {
                echo '<option value="' . $dado['CategoriaID'] . '">' . $dado['Nome'] . '</option>';
            }
            ?>
        </select>
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php
// inclui o footer
include_once '../footer.php';
?>