<?php
include_once '../includes/_dados.php';

if (isset($_GER['id'])|| !empty($_GER['id'])) 
{
    $id= $_GET['id'];

    $sql = "SELECT * FROM  categoria WHERE CategoriaID =".$id;

    $resultado = mysqli_query($conexao, $sql);
    
    $dados = mysqli_fetch_array($resultado, MYSQLI_ASSOC);# code...
}else {
    $id= '';
    $dados ['Nome'] = '';
    $dados ['Descricao'] = '';
    $dados ['Imagem'] = '';
}
?>
<main>

<h2>Administração das Categorias</h2>
<a href="categoria-lista.php">Listagem</a>
<hr>
<form action="categoria-processa.php" method="post" enctype="multipat/form-data">
    <input type="hidden" value=" salvar " name=" acao">
    <input type="text" value= "<?php echo $dados['Imagem'];?>"  name ="imagem">
    <input type="text" name="id" value="<?php echo $id;?>"><br>
    <label for="nome">Nome:</label><br>
    <input type="text" id="nome" name="nome" value=" <?php echo $dados['Nome'];?>"><br>
    <label for="descricao">Descrição:</label><br>
     <textarea name="descricao" id="descircao"> <?php echo $dados['Descricao'];?></textarea>
     <label for="imagem">Imagem:</label><br>
     <?php
     if (!empty($dados['Imagem'])) {
     ?>
        <img src="../imagens/categorias/<?php echo $dados['Imagem']; ?>" width="150"/><br>
    <?php
     }
    ?>
    <input type="file" name ="foto">
    <hr>
    <input type="submit" value ="Enviar" >
</form>
</main>