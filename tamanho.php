<?php
    session_start();
    include_once('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de tamanho</title>
    <link rel="stylesheet" href="style_bg.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="Menu.php">Retornar</a></li>
            <li><a href="logout.php" id="logout_1">Logout</a></li>
        </ul>
    </nav>

    <div class="form">
        <form action="env_tamanho.php" method="post">
            <h1>Cadastros de tamanhos</h1>
            <input type="text" name="dstamanho" id="dstamanho" placeholder="Descrição do tamanho" required="required">
            <button type="submit" value="submit" name="submit" class="btn btn-block btn-large btn-primary">Enviar</button>
        </form>
    </div>
</body>
</html>