<?php
session_start();
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Logado</title>
  </head>
  <body>
  <h2>Olá, <?php echo $_SESSION['usuario'];?>, você foi logado com sucesso!</h2>
<h2><a href="logout.php">Sair</a></h2>
  </body>
</html>