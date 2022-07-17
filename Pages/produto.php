<?php
    session_start();
    include_once('../Php/verifica_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos</title>
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/style-forms.css">
    <?php include_once("../php/connection.php")?>
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="Menu.php">Retornar</a></li>
            <li><a href="../Php/logout.php" id="logout_1">Logout</a></li>
        </ul>
    </nav>

    <div class="form banner">
        <div>
            <h1 id="titulo">Cadastro de produtos</h1>
        </div>

        <form action="env_cad_pro.php" method="post">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cdproduto">Código do produto</label>
                    <input type="text" name="cdproduto" id="cdproduto" placeholder="Código" required="required">
                </div>
            </fieldset>  
            
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cdmarca">Marca</label>
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
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div class="campo">
                    <label for="cdtamanho">Tamanho</label>
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
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div class="campo">
                    <label for="cdtppeca">Tipo de peça</label>
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
                </div>
            </fieldset>
            
            <fieldset class="grupo">
                <div class="campo">
                    <label for="dsobservacao">Observações</label>
                    <input type="text" name="dsobservacao" id="dsobservacao" placeholder="Observação">
                </div>
            </fieldset>

            <fieldset class="grupo">
                <div class="grupo">
                    <button type="submit" value="submit" name="submit" id="submit" class="botao">Enviar</button>
        </form>
    </div>

</body>
</html>