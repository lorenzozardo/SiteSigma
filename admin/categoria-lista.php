<?php
// inclui a conexao com o banco de dados
include_once '../includes/_banco.php';
// inclui o head e header da pagina admin
include_once '../includes/_head.php';
//SQL de consulta
$sql = "SELECT * FROM categorias";
// executa a consulta de dados (variavel de conexao, variavel  sql de consulta)
$resultado = mysqli_query($conn,$sql);
// conta quantos registros existem
$total = mysqli_num_rows($resultado);
// inclui o menu do painel admin
include_once '../_menu.php';
?>
    <main>
        <h2>Administração das Categorias</h2>
        <a href="categoria-salvar.php">Inserir</a>
        <hr>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            <?php
            // verifica se existe informacoes no banco de date_isodate_set
            if($resultado){
                // converte os resultados em uma linha matriz
                while ($dado = mysqli_fetch_array($resultado)) {
            ?>
            <tr>
                <td><?php echo $dado['CategoriaID'];?></td>
                <td><a href="categoria-salvar.php?acao=salvar&id=<?php echo $dado['CategoriaID'];?>"><?php echo $dado['Nome'];?></a></td>
                <td><a href="categoria-processa.php?acao=excluir$id=<?php echo $dado['CategoriaID'];?>">Excluir</a></td>
            </tr>
            <?php
                }
            }else{
            ?>
            <tr>
                <td colspan="3">Rusultados não encontradas</td>
            </tr>
            <?php
            }
            ?>
            <tr>
                <td colspan="3">Total de Registros: <?php echo $total;?></td>
            </tr>
        </table>

    </main>
<?php
// inclui o footer
include_once '../footer.php';
?>