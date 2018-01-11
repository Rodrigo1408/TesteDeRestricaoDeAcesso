<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página para realizar login">
    <meta name="author" content="Rodrigo Barreto">
    <link rel="icon" href="imagens/favicon.ico">

    <title>Área para Usuário Cadastrado</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <script src="js/ie10-viewport-bug-workaround.js"></script>

  </head>

  <body>
     <?php
        isset($_SESSION['usuarioId'],          
              $_SESSION['usuarioNome'],        
              $_SESSION['usuarioNivelAcesso'], 
              $_SESSION['usuarioLogin'],       
              $_SESSION['usuarioSenha']);
     ?>
    <div class="container">
      <form class="form-signin" method="POST" action="valida_login.php">
        <h2 class="form-signin-heading text-center">Área para Usuário Cadastrado</h2>
        <label for="inputEmail" class="sr-only">Usuário</label>

        <input type="text" name="usuario" class="form-control" 
        placeholder="Digite o usuário" required autofocus><br />

        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      </form>
      <p class="text-center text-danger">
        <?php
        if(isset($_SESSION['loginErro'])){
               echo $_SESSION['loginErro'];
               isset($_SESSION['loginErro']);
          }

        ?>

      </p>

    </div> 
    
  </body>
</html>
