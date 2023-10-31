<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Cadastro</title>
</head>
<body>
    <div>
        <form action="cadastrar.php" method="POST">
        <h2>Cadastro</h2>
        <input type="text" name='nome' placeholder='Seu nome' required maxlength="40"><br>
        <input type="email" name='email' placeholder='Seu email' required maxlength="40"><br>
        <input type="password" name='senha' placeholder='Sua senha' required maxlength="30"><br><br>
        <button class="button" type='submit' style="vertical-align:middle"><span>Cadastrar</span></button><br><br>
        <a href="index.php">Login</a>
        </form>
    </div>
</body>
</html>