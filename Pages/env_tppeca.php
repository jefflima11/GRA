<?php

    session_start();

    $dstppeca = $_POST['dstppeca'];
    $envio  =   $_POST['submit'];

    if (isset($envio)) {
        if (empty($dstppeca)) {
            $_SESSION['errodstppeca'] = "tipo de peca";
        }
    
        include_once('../php/connection.php');

        $result = mysqli_query($con,"call sp_tppeca('$dstppeca')");
        header("location: tipo-peca.php");

    }
?>