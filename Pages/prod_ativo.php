<?php
    session_start();
    include_once('../Php/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-forms.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Produtos ativos</title>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="Menu.php">Retornar</a></li>
            <li><a href="../Php/logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="form banner">
        <div>
            <h1 id="titulo">Produtos ativos</h1>
        </div>

        <form action="" method="post">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cdproduto">Código do produto</label>
                    <input type="text" name="cdproduto" id="cdproduto">
                    
                    <button type="submit" class="botao" value="pesquisar" name="envpesquisa">Consultar</button>
                </div>
            </fieldset>
        </form>

        <?php
            $envpesquisa = filter_input(INPUT_POST,'envpesquisa', FILTER_SANITIZE_STRING);
            if ($envpesquisa) {
                $cdproduto = filter_input(INPUT_POST,'cdproduto',FILTER_SANITIZE_STRING);
                $result_user = "SELECT * FROM hist_pro WHERE cd_produto LIKE '%$cdproduto%'";
                $r_result_user = mysqli_query($con,$result_user);
                while ($row_usuario = mysqli_fetch_assoc($r_result_user)) {
                    echo "<hr>Código do produto: " . $row_usuario['cd_produto'] . "<br>"; 
                    echo "Código da marca: " . $row_usuario['cd_marca'] . "<br>";
                    echo "Código do tamanho: " . $row_usuario['cd_tamanho'] . "<br><hr>";
                }
            }
        ?>
    </div>
</body>
</html>