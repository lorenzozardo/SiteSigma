<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<h1 style="text-align: center; padding-top: 20px; font-size: 45px; font-weight: bold;">CONTATO</h1>

<?php
if (isset ( $_POST['txtNome']) ) {
    echo '<h3 style="font-size: 32px; font-weight: bold; text-align: center; padding: 20px; color: #3fa526;" >Sua mensagem foi enviada com sucesso!</h5>';
}
?>

<div class="contato">
    <form class="form-contato" action="./contato.php" method="post">
        <label class="entry-label" for="txtNome">Nome Completo:</label>
        <input class="entry" type="text" name="txtNome" id="txtNome">
        <label class="entry-label" for="email">E-Mail:</label>
        <input class="entry" type="email" name="email" id="email">
        <label class="entry-label" for="telefone">Telefone:</label>
        <input class="entry" type="tel" name="telefone" id="telefone">
        <label class="entry-label" for="txtMensagem">Mensagem:</label>
        <textarea class="entry" name="txtMensagem" id="txtMensagem" cols="30" rows="4"></textarea>
        <br>
        <input class="entry" type="submit" value="Enviar">
    </form>

    <?php
    // include do footer
    include_once './includes/_footer.php';
    ?>