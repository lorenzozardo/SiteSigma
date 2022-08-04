<?php
// inclui a conexao com o banco de dados
include_once '../includes/_banco.php';
// inclui o head e header da pagina admin
include_once '../includes/_head.php';
// verifica se o geet foi informado e se ele nao esta vazio
if ( isset($_GET['id']) || !empty($_GET['id'])){   // captura o ID
    $id = $_GET['id'];
    $sql = "SELECT * FROM categorias WHERE CategoriaID = ".$id;
    $resultado = mysqli_query($conexao,$sql);
    // parametri que converte as colunas em campos
    $dados = mysqli_fetch_array($resultado,MYSQLI_ASSOC);
}else{
    $id = '';
    $dados['Nome'] = '';
    $dados['Descricao'] = '';
    $dados['Imagem'] = '';
}
// inclui o menu do painel admin
include_once '../_menu.php';
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
            <textarea id="descricao" name="descricao"><?php echo $dados['Descricao'];?></textarea>
            <label for="imagem">Imagem:</label><br>
            <?php
            // verifica se existe imagem
            if ( !empty($dados['Imagem']) ){
            ?>
                <img src="../imagens/categorias/<?php echo $dados['Imagem'];?>" width="150" /><br>
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
include_once '../footer.php';
?>