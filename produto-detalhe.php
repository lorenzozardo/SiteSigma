<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

// captura os dados via get
$id = $_GET['id'];
?>

<div class="content">
    <div class="left-side">
        <img src="./content/<?php echo $produtos[$id]['imagem']?>">
    </div>
    <div class="right-side">
        <h5><?php echo $produtos[$id]['categoria']?></h5>
        <h1><?php echo $produtos[$id]['nome']?></h1>
        <br>
        <h4 style="font-size: 45px; font-weight: bold;">R$ <?php echo $produtos[$id]['preco']?></h4>
        <br>
        <a href="login.php">COMPRAR</a>
        <br><br>
        <h3><?php echo $produtos[$id]['tamanho']?></h3>
        <br>
        <p style="font-size: 17px"><?php echo $produtos[$id]['descricao']?></p>
    </div>
</div>