<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="formulario.css">
</head>

<body>
        <div>
         <form action="login.php" method="POST">
            <h2>Login</h2>
               <input name="email" name="text" class='loginput' type='email' placeholder="Seu email" required maxlength="40"><br>
               <input name="senha" class='loginput' type="password" placeholder="Sua senha" require maxlength="30"><br><br>
               <button class="button" type='submit'><span>Entrar</span></button><br><br>
               <a href="index.php">Cadastrar</a>
            </form>
        </div>
</body>
</html>