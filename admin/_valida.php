<?php 
// incizaliza a session
session_start();
/**
 * Verifica se a sessao login foi criada e se ela foi preenchida apo preencher os dados
 * caso contrario redireciona o usuario
 */
if( empty($_SESSION['LOGIN']) || !isset( $_SESSION['LOGIN'])) {
    header('location: ./login.php?msg=2');
}
?>