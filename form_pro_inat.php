<?php

    session_start();

    if (isset($_SESSION['errocdhistpro'])) {
        echo $_SESSION['errocdhistpro'];
        unset($_SESSION['errocdhistpro']);
    }

    if (isset($_SESSION['registrosalvo'])) {
        echo $_SESSION['registrosalvo'];
        unset ($_SESSION['registrosalvo']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inativacao de produto</title>
</head>
<body>


    
</body>
</html>