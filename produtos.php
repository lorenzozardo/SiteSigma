<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<link rel="stylesheet" href="style.css">
<div class="container">
    <br>
    <h2>Produtos</h2>
    <div class="row mt-5">
        <?php
    //crio uma variavel que contem SQL executado
    $sql = "SELECT * FROM produtos WHERE Ativo = 1";
    // executa o comando SQL
    $exec = mysqli_query($conn, $sql);
    // informar a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);
    // percorre todos od dados extraidos do banco
    while ($dados = mysqli_fetch_assoc($exec) ) {
    ?>
        <div class="card m-4" style="width: 18rem;">
    <img src="./content/<?php echo $dados['Imagem'];?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $dados['Nome'];?></h5>
        <p class="card-text"><?php echo $dados['Descricao'];?></p>
        <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID'];?>&tipo=promocao" class="btn btn-primary">Comprar</a>
    </div>
</div>

<?php
    }
    ?>

    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>