<?php
session_start();
include('connection.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi encontrado</p>";
    header('location: ../index.php');
   
    header('location: ../index.php');
    exit();
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select cd_usuario, ds_usuario from usuario where ds_usuario = '{$usuario}' and ds_senha=md5('{$senha}')";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

// echo $row; exit;

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('location: ../Pages/Menu.php');
    exit();
} else {
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi encontrado</p>";
    header('location: ../index.php');
}