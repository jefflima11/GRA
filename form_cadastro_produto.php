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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>
    <div>
        <form action="env_cad_pro.php" method="POST">
            <fieldset id="border">
                <label for="">Cadastro de produtos</label>
                <br>
                <label for="">Codigo produto</label>
                <input type="text" name="cdproduto">
                <br>
                <label for="">Marca</label>
                <input type="text" name="cdmarca">
                <br>
                <label for="">Tamanho</label>
                <input type="text" name="cdtamanho">
                <br>
                <label for="">Tipo da peça</label>
                <input type="text" name="cdtppeca">
                <br>
                <label for="">Observacao</label>
                <input type="text" name="dsobservacao">
                <br>
                <input type="submit" name="submit">
            </fieldset>

        </form>
    </div>
    
</body>
</html>