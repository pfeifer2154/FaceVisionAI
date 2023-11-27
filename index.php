<html>
<head>
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="formulario.css">
</head>

<body>

    <div>
	<form action="cadastroAction.php" method="post">
	<h2>Cadastro</h2> 
		<input type="text" class='loginput' placeholder="Seu nome" name="name" required maxlength="40"><br>
		<input type="text" class='loginput' placeholder="Seu email" name="email" required maxlength="40"><br>
		<input type="password" class='loginput' placeholder="Seu senha" name="senha" required maxlength="40"><br><br>
		<button class="button" type='submit' style="vertical-align:middle"><span>Cadastrar</span></button><br><br>
		<a href="loginfront.php">Login</a>
	</form>
	</div>

</body>
</html>