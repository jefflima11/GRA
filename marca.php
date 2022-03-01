<?php
    include_once("connection.php");
?>

<!-- !DOCTYPE html> -->
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Marcas</title>
    <link rel="stylesheet" href="style_bg.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="Menu.html">Retornar</a></li>
        </ul>
    </nav>

    <div class="form">
        <h1>Cadastro de Marcas</h1>
        <form action="env_marca.php" method="post">
            <input type="text" name="dsmarca" id="dsmarca" placeholder="Nome da marca" required="required">
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
        </form>
    </div>
</body>
</html>