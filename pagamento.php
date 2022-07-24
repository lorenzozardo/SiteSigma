<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>
<link rel="stylesheet" href="style.css">

<?php
if (isset ( $_POST['txtNome']) ) {
    echo '<h3 style="font-size: 32px; font-weight: bold; text-align: center; padding: 20px; color: #3fa526;" >Seus dados foram cadastrados com sucesso!</h5>';
}
?>

<h2 style="font-weight: bold; padding: 20px;">Escolha a forma de pagamento:</h2>
<br>

<div class="col">
    <div class="row" style="padding-left: 60px;">
    <div class="col-sm-3">
  <div class="card" style="width: 20rem; background-color: rgb(170, 170, 170); border-radius: 10px;">
    <a href="pix.php" style="text-decoration: none;"><img src="./img/pix.jpeg" style="height: 200px; padding: 10px; border-radius: 15px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="color: #000; font-size: 23px; font-weight: bold;">Pix</h5>
      </a>
    </div>
    </div>
  </div>
  <div class="col-sm-3">
  <div class="card" style="width: 20rem; background-color: rgb(170, 170, 170); border-radius: 10px;">
    <a href="cartao-de-credito.php" style="text-decoration: none;"><img src="./img/CartaoDeCredito.jpeg" style="height: 200px; padding: 10px; border-radius: 15px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="color: #000; font-size: 23px; font-weight: bold;">Cartão de Crédito</h5>
      </a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
  <div class="card" style="width: 20rem; background-color: rgb(170, 170, 170); border-radius: 10px;">
    <a href="cartao-de-debito.php" style="text-decoration: none;"><img src="./img/CartaoDeDebito.jpeg" style="height: 200px; padding: 10px; border-radius: 15px;" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 style="color: #000; font-size: 23px; font-weight: bold;">Cartão de Débito</h5>
        </a>
      </div>
      </div>
    </div>
  </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>