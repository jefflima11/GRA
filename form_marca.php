<?php

    session_start();
    
    if (isset($_SESSION['errodsmarca'])) {
        echo $_SESSION['errodsmarca'];
        unset ($_SESSION['errodsmarca']);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de marca</title>
</head>
<body>
    <div>
        <fieldset>
            <form action="env_marca.php" method="post">
                <a href="index.php">
                    <input type="button" value="Menu">
                </a>

                <p>Cadastro de marcas</p>

                <label for="">Nome da marca</label>
                <input type="text" name="dsmarca" id="dsmarca">
                <br><br>
                <input type="submit" value="submit" name="submit" id="submit">

            </form>    
        </fieldset>
    </div>


</body>
</html>