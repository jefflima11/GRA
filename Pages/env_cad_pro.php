<?php

    session_start();

    $codproduto = $_POST['cdproduto'];
    $cdmarca = $_POST['cdmarca'];
    $cdtamanho = $_POST['cdtamanho'];
    $cdtppeca = $_POST['cdtppeca'];
    $dsobservacao = $_POST['dsobservacao'];
    $envio = $_POST['submit'];

    if (isset($envio)) {
        if (empty($codproduto)) {
            $_SESSION['errocdproduto'] = "produto";
             
        }

        if (empty($cdmarca)) {
            $_SESSION['errocdmarca'] = "marca";
            
        }

        if (empty($cdtamanho)) {
            $_SESSION['errocdtamanho'] = "tamanho";
            
        }

        if (empty($cdtppeca)) {
            $_SESSION['errocdtppeca'] = "tipo peca";
            
        }

        include_once('../php/connection.php');

        $result = mysqli_query($con,"call sp_hist_pro('$codproduto','$cdmarca','$cdtamanho','$cdtppeca','$dsobservacao')");      
        header("location: produto.php");

    }

?>