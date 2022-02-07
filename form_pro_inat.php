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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inativacao de produto</title>
</head>
<body>

    <div>
        <fieldset>
            <form action="env_pro_inat.php" method="post">
                <a href="index.php">
                    <input type="button" value="Menu">
                </a>

                <p>Inativação de produtos</p>

                <label for="">Codigo a inativar</label>
                <input type="text" name="cdhistpro" id="cdhistpro">
                <br><br>
                <input type="submit" value="submit" name="submit" id="submit">

                
            </form>
        </fieldset>    
    </div>

    
</body>
</html>