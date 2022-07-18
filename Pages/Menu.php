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
    <title>Menu - GRA</title>
    <link rel="stylesheet" href="../Css/style.css">
</head>
<body>
    <nav class="navbar">
        <ul>
            <li><a href="#">Cadastro</a>
                <ul>
                    <li><a href="produto.php">Produtos</a></li>
                    <li><a href="marca.php">Marca</a></li>
                    <li><a href="tamanho.php">Tamanho</a></li>
                    <li><a href="tipo-peca.php">Tipos de peças</a></li>
                    <li><a href="Inativacao-produtos.php">Inativacao de produtos</a></li>
                </ul>
            </li>
            <li><a href="#">Movimentação</a>
                <ul>
                    <li><a href="#">Entrada de produtos</a></li>
                    <li><a href="#">Saida de produtos </a></li>
                </ul>
            </li>

            <li><a href="#">Consultas</a>
                <ul>
                    <li><a href="prod_ativo.php">Produtos ativos</a></li>
                    <li><a href="#">Códigos disponiveis</a></li>
                </ul>
            </li>
            <li><a href="#">Relátorios</a></li>
            <li><a href="../Php/logout.php" id="logout">Logout</a></li>
        </ul>
    </nav>
</body>
</html>