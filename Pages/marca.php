<?php
    session_start();
    include_once('../php/connection.php');
    include_once('../php/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Marcas</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/style-forms.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="Menu.php">Retornar</a></li>
            <li><a href="../php/logout.php" id="logout_1">Logout</a></li>
        </ul>
    </nav>

    <div class="form banner">
        <div>
            <h1 id="titulo">Cadastro de Marcas</h1>
        </div>

        <form action="env_marca.php" method="post">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="dsmarca">Marca</label>
                    <input type="text" name="dsmarca" id="dsmarca" placeholder="Nome da marca" required="required">
                </div>
            </fieldset>       
                
            <fieldset class="grupo">
                <div class="campo">
                    <button type="submit" name="submit" id="submit" class="botao">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>