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
            <li><a href="Menu.html">Retornar</a></li>
        </ul>
    </nav>

    <div class="form">
        <h1>Cadastro de produtos</h1>
        <form action="env_cad_pro.php" method="post">

            <input type="text" name="cdproduto" id="cdproduto" placeholder="Código" required="required">
            <!-- <input type="text" name="cdmarca" id="cdmarca" placeholder="Marca" required="required"> -->

            <select name="select_marca" id="cdmarca" required="required">
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

            <input type="text" name="cdtamanho" id="cdtamanho" placeholder="Tamanho" required="required">
            <input type="text" name="cdtppeca" id="cdtppeca" placeholder="Tipo de produto" required="required">
            <input type="text" name="dsobservacao" id="dsobservacao" placeholder="Observação" required="required">

            <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary btn-block btn-large">Enviar</button>
        </form>
    </div>

</body>
</html>