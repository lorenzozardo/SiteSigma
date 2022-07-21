<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// captura os dados via get
$id = $_GET['id'];
$tipo = $_GET['tipo'];


    //crio uma variavel que contem SQL executado
    $sql = "SELECT * FROM produtos WHERE Ativo = 1 AND ProdutoID = {$id}";
    // executa o comando SQL
    $exec = mysqli_query($conn, $sql);
    // informar a quantidade de registros de dados
    $numProdutos = mysqli_num_rows($exec);
    // percorre todos od dados extraidos do banco
    $produtos = mysqli_fetch_assoc($exec);
?>
<div class="container mt-5">
    <div class="row">
        <div class="col">

        <h1><?php echo $produtos['Nome'];?></h1>
        <p><?php echo $produtos['Descricao']?></p>
        <img src="./content/<?php echo $produtos['Imagem']?>">
        <h4>R$ <?php echo $produtos['Preco']?></h4>

        </div>
    </div>

    <div class="row">
        <a href="index.php"><div class="col">Voltar</div></a>
        <a href=""><div class="col">Comprar</div></a>
    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>