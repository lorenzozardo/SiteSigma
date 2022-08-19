<?php
// inclui a conexao com o banco de dados
include_once '../includes/_dados.php';

// captura a acao do usuario
$acao = $_REQUEST['acao'];
// codigo da categoria
$id = $_REQUEST['id'];

switch($acao) {
    // acao de excluir dados
    case 'excluir':

        // monta a SQL que exclui os registros
        $sql = "DELETE FROM categoria WHERE CategoriaID = ".$id;

        // executa o comando de excluir
        mysqli_query($conn, $sql);

        // redireciona a pagina 
        header('location: ./categoria-lista.php');

        break;

    case 'salvar':
        // captura os dados
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];

        // upload da imagem
        if($_FILES['foto']['size'] > 0 ){
            // pasta que armazena o arquivo
            $uploaddir = '../imagens/categorias/';
            // extrai a extensao da imagem
            $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
            // gera um nome aleatorio para imagem
            $nomearquivo = 'categoria-'.$id.'-'.rand().'.'.$extensao;
            // novo arquivo
            $uploadfile = $uploaddir . $nomearquivo;
            // faz o upload da imagem 
            move_uploaded_file($_FILES['foto']['tmp_name'], $uploadfile);
        }
        else{
            $nomearquivo = $_POST['imagem'];
        }
        // monta o sql conforme informa o id
        if( !isset($_POST['id']) || empty($_POST['id'])){
            // comando sql do banco de dados que inclui um registro 
            $sql = "INSERT INTO `categoria`(`Nome`, `Descricao`, `Imagem`) VALUES ('".$nome."','".$descricao."','".$nomearquivo."')";
        } else {
            // comando sql do banco de dados que atualiza um registro
            $sql = "UPDATE `categoria` SET `Nome`='".$nome."', `Descricao`='".$descricao."',`Imagem`='".$imagem."' WHERE `CategoriaID`='".$id."' ";
        }
        // executa o comando de excluir
        mysqli_query($conn, $sql);

        // redireciona a pagina 
        header('location: ./categoria-lista.php');
        break;
}

// inclui o footer
include_once '../admin/_footer.php';
?>