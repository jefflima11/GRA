<?php
    
   session_start();

   if (isset($_SESSION['errocdproduto'])) {
       echo "<p style='color: #FF0000;'>Campo " .$_SESSION['errocdproduto']." obrigatorio";
       unset($_SESSION['errocdproduto']);
   }
   
   if (isset($_SESSION['errocdmarca'])) {
    echo "<p style='color: #FF0000;'>Campo " .$_SESSION['errocdmarca']." obrigatorio";
    unset($_SESSION['errocdmarca']);
   }

   if (isset($_SESSION['errocdtamanho'])) {
    echo "<p style='color: #FF0000;'>Campo " .$_SESSION['errocdtamanho']." obrigatorio";
    unset($_SESSION['errocdtamanho']);
   }

   if (isset($_SESSION['errocdtppeca'])) {
    echo "<p style='color: #FF0000;'>Campo " .$_SESSION['errocdtppeca']." obrigatorio";
    unset($_SESSION['errocdtppeca']);
   }

   if (isset($_SESSION['registrosalvo'])) {
       echo $_SESSION['registrosalvo'];
       unset($_SESSION['registrosalvo']);
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de produto</title>
</head>
<body>
    <div>
        <form action="env_cad_pro.php" method="POST">
            <fieldset id="border">
                <div id="form">
                <div id="botao_voltar">
                    <a href="index.php">
                        <input type="button" value="Menu">
                    </a>
                </div>  
                <br> 
            
                <p>Cadastro de produtos</p>
                <br>

                <label for="">Codigo produto</label>
                <input type="text" name="cdproduto">
                <br>
                
                <label for="">Marca</label>
                <select name="cdmarca" id="marca">
                    <option value="1">Nike</option>
                </select>
                <br>
                
                <label for="">Tamanho</label>
                 <select name="cdtamanho" id="tamanho">
                     <option value="1">Unico</option>
                </select>
                <br>

                <label for="">Tipo da peça</label>
                    <select name="cdtppeca" id="tppeca">
                        <option value="1">Camisa</option>
                    </select>
                <br>
                <label for="">Observacao</label>
                <input type="text" name="dsobservacao">
                <br>
                <input type="submit" name="submit" id="submit">
                </div>

            </fieldset>

        </form>
    </div>
    
</body>
</html>