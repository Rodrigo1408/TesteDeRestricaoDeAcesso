<?php

session_start();
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
include_once("conexao.php");

$result = mysqli_query($link, "SELECT * FROM usuarios WHERE login='$usuario' AND senha='$senha' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
//echo "Usuario: ".$resultado['nome'];
if (empty($resultado)) {
	//Mensagem de Erro.
	$_SESSION['loginErro'] = "Usuario ou senha Inválido";

	//Manda o usuario para a tela de login.
	header("Location: login.php");
}else{
    //Define os valores atributos na sessao do usuario
    $_SESSION['usuarioId']          = $resultado['id'];
    $_SESSION['usuarioNome']        = $resultado['nome'];
    $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
    $_SESSION['usuarioLogin']       = $resultado['login'];
    $_SESSION['usuarioSenha']       = $resultado['senha'];

    if ($_SESSION['usuarioNivelAcesso'] == 1) {
    	header("Location: administrativo.php");
    }else{
	    header("Location: usuario.php");
  }
}

?>

