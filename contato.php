<?php
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

/**
 * $_REQUEST é a mesma coisa que $_GET e $_POST juntos
 *
 */
?>
<link rel="stylesheet" href="style.css">

<div class="col">
    <h1>Contato</h1>
    <form action="./contato.php" method="post">
        <label for="txtNome">Nome Completo</label>
        <input type="text" name="txtNome" id="txtNome">
        <br>
        <label for="email">E-Mail</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="telefone">Telefone</label>
        <input type="tel" name="telefone" id="telefone">
        <br>
        <label for="txtMensagem">Mensagem</label>
        <textarea name="txtMensagem" id="txtMensagem" cols="30" rows="2"></textarea>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
    <h2>Dados Cadastrados</h2>
</div>

<?php
    if (isset($_POST['txtNome'])) {   
        $nome = $_POST['txtNome'];
        echo $nome;
    } 
    echo '<br>';
    if (isset($_POST['email'])) {   
        $emailCadastro = $_POST['email'];
        echo $emailCadastro;
    } 
    echo '<br>';
    if (isset($_POST['telefone'])) {   
        $telefoneCadastro = $_POST['telefone'];
        echo $telefoneCadastro;
    }; 
    echo '<br>';
    if (isset($_POST['txtMensagem'])) {   
        $mensagem = $_POST['txtMensagem'];
        echo $mensagem;
    };
?>

<?php
// include do footer
include_once './includes/_footer.php';
?>