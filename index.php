<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<link rel="stylesheet" href="style.css">


<div class="container">
    <br>
    <h1 style="font-size: 45px; font-weight: bold; color: rgb(191, 131, 0);">Lançamentos</h1>
    <div class="row mt-4">

        <?php
        // laco de repeticao para exibir os 3 primeiros produtos
    for ($i=0; $i < 6 ; $i++) { 
    ?>

    <div class="card m-4" style="width: 18rem;">
        <img src="./content/<?php echo $produtos[$i]['imagem'];?>" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?php echo $produtos[$i]['nome'];?></h5>
        <p class="card-text" style="font-size: 25px; font-weight: bold;"><?php echo $produtos[$i]['preco'];?></p>
        <a href="produto-detalhe.php?id=<?php echo $i?>&tipo=promocao" class="btn btn-primary">Comprar</a>
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