<?php

    session_start();

    $dsmarca = $_POST['dsmarca'];
    $envio = $_POST['submit'];


    if (isset($envio)) {
        if (empty($dsmarca)) {
            $_SESSION['errodsmarca'] = "descricao";
        } 

        include_once('connection.php');

        $result = mysqli_query($con,"call sp_marca('$dsmarca')");
        header("location: marca.html");
    }

?>