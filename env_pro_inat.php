<?php

    session_start();

    $cd_hist_pro = $_POST['cdhistpro'];
    $envio  =   $_POST['submit'];

    if (isset($envio)) {
        if (empty($cd_hist_pro)) {
            $_SESSION['errocdhistpro'] = "historico produto";
        }
    
        include_once('connection.php');

        $result = mysqli_query($con,"call sp_inativacao('$cd_hist_pro')");
        header("location: inativacao-produtos.php");

    }
?>