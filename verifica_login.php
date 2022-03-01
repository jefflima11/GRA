<?php
if (!$_SESSION['usuario']) {
    header('location: index.html');
    exit();
}