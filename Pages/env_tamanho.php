<?php

    session_start();

    $dstamanho = $_POST['dstamanho'];
    $envio = $_POST['submit'];


    if (isset($envio)) {
        if (empty($dstamanho)) {
            $_SESSION['errodstamanho'] = "tamanho";
        } 

        include_once('../php/connection.php');

        $result = mysqli_query($con,"call sp_tamanho('$dstamanho')");
        header("location: tamanho.php");
    }

?>