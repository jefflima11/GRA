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
    <title>Inativação de produtos</title>
    <link rel="stylesheet" href="style_bg.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="logout.php" id="logout_1">Logout</a></li>
        </ul>
    </nav>

    <div class="form">
        <h1 id="title-inat">Inativação de produtos</h1>
        <form action="env_pro_inat.php" method="post">
            <input type="text" name="cdhistpro" id="cdhistpro" placeholder="Código do produto" required="required">  
            <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
          
        </form>
    </div>
    
</body>
</html>