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
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="style_bg.css">
    <?php include_once("connection.php")?>
</head>
<body>
    <nav>
        <ul>
            <li><a href="Menu.php">Retornar</a></li>
            <li><a href="logout.php" id="logout_1">Logout</a></li>
        </ul>
    </nav>

    <div class="form">
        <h1>Cadastro de produtos</h1>
        <form action="env_cad_pro.php" method="post">

            <input type="text" name="cdproduto" id="cdproduto" placeholder="Código" required="required">

            <select name="cdmarca" id="cdmarca" required="required">
                <option>Selecione</option>
                <?php
                    $result_marca = "SELECT * FROM marca";
                    $resultado_marca = mysqli_query($con, $result_marca);
                    while ($row_marca = mysqli_fetch_assoc($resultado_marca)){ ?>

                    <option value="<?php echo $row_marca['cd_marca'];?>"><?php echo $row_marca['ds_marca'];?></option>
                    <?php
                     }
                    ?>
            </select>
            
            <select name="cdtamanho" id="cdtamanho" required="required">
                <option>Selecione</option>
                <?php
                    $result_tamanho = "SELECT * FROM tamanho";
                    $resultado_tamanho = mysqli_query($con, $result_tamanho);
                    while ($row_tamanho = mysqli_fetch_assoc($resultado_tamanho)){ ?>

                    <option value="<?php echo $row_tamanho['cd_tamanho'];?>"><?php echo $row_tamanho['ds_tamanho'];?></option>
                    <?php
                     }
                    ?>
            </select>         

            <select name="cdtppeca" id="cdtppeca" required="required">
                <option>Selecione</option>
                <?php
                    $result_tppeca = "SELECT * FROM tp_peca";
                    $resultado_tppeca = mysqli_query($con, $result_tppeca);
                    while ($row_tppeca = mysqli_fetch_assoc($resultado_tppeca)){ ?>

                    <option value="<?php echo $row_tppeca['cd_tp_peca'];?>"><?php echo $row_tppeca['ds_tp_peca'];?></option>
                    <?php
                     }
                    ?>
            </select>         
        
            <input type="text" name="dsobservacao" id="dsobservacao" placeholder="Observação">

            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
        </form>
    </div>

</body>
</html>