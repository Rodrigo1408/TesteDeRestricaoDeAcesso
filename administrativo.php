<?php
session_start();
include_once("seguranca.php");
echo "Bem vindo administrador ".$_SESSION['usuarioNome'];
?>