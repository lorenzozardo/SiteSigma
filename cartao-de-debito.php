<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1 style="text-align: center; padding-top: 20px; font-size: 45px; font-weight: bold;">Cartão de Débito</h1>

<?php
if (isset ( $_POST['txtNome']) ) {
    echo '<h3 style="font-size: 32px; font-weight: bold; text-align: center; padding: 20px; color: #3fa526;">Seu pedido está em andamento! Enviaremos atualizações pelo seu e-mail.</h5>';
}
?>

<div class="cartao">
    <form class="form-contato" action="./cartao-de-debito.php" method="post">
        <label class="entry-label" for="txtNome">Número do Cartão:</label>
        <input class="entry" type="text" name="txtNome" id="txtNome">
        <label class="entry-label" for="numVencimento">Vencimento:</label>
        <input class="entry" type="vencimento" name="vencimento" id="numVencimento">
        <label class="entry-label" for="textTitular">Nome do Titular:</label>
        <input class="entry" type="titular" name="titular" id="textTitular">
        <label class="entry-label" for="numCodigo">Código de Segurança:</label>
        <input class="entry" type="codigo" name="codigo" id="textCodigo">
        <br>
        <input class="entry" type="submit" value="Confirmar Pagamento">
    </form>

<?php
// include do footer
include_once './includes/_footer.php';
?>