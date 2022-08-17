<?php
// inclui a conexao com o banco de dados
include_once '../includes/_dados.php';
// inclui o head e header da pagina admin
include_once '_header.php';
// verifica se o get foi informado e se ele não esta vazio
if( isset($_GET['id']) || !empty($_GET['id'])){ // captura o ID
    $id = $_GET['id'];
    // consulta os dados
    $sql = "SELECT * FROM categoria WHERE CategoriaID = ".$id;
    $resultado = mysqli_query($conn, $sql);
    // parametro que converte as colunas em campos
    $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
} else {
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
    $dados['Imagem'] = '';
}
// inclui o menu do painel admin
include_once '../admin/_menu.php';
?>

<main>
    <h2>Administração das Categorias</h2>
    <a href="categoria-lista.php">Listagem</a>
    <hr>
    <form action="categoria-processa.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="salvar" name="acao">
        <input type="text" value="<?php echo $dados['Imagem'];?>" name="imagem">
        <input type="text" name="id" value="<?php echo $id;?>"><br>
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" value="<?php echo $dados['Nome'];?>"><br>
        <label for="descricao">Descrição:</label><br>
        <textarea name="descricao" id="descricao"><?php echo $dados['Descricao'];?></textarea><br>
        <label for="imagem">Imagem:</label><br>
        <?php
        // verifica se existe imagem
        if( !empty($dados['Imagem']) ){
            ?>
            <img src="../imagens/categorias/<?php echo $dados['Imagem'];?>" width="150"><br>
        <?php
        }
        ?>
        <input type="file" name="foto">
        <hr>
        <input type="submit" value="Enviar">
    </form>
</main>

<?php
// inclui o footer
include_once '_footer.php';
?>