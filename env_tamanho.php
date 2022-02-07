<?php

    session_start();

    $dsmarca = $_POST['dstamanho'];
    $envio = $_POST['submit'];


    if (isset($envio)) {
        if (empty($dsmarca)) {
            $_SESSION['errodstamanho'] = "tamanho";
        } 

        include_once('connection.php');

        $result = mysqli_query($con,"call sp_tamanho('$dstamanho')");
        header("location: form_tamanho.php");
    }

?>