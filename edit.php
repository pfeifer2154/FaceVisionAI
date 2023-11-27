<?php
session_start();
include('verifica.php');
require_once("dbConnection.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM contas WHERE id = $id");

$resultData = mysqli_fetch_assoc($result);

$name = $_SESSION['name'];
$senha = $_SESSION['senha'];
$email = $_SESSION['email'];
?>
<html>
<head>	
	<title>Editar</title>
	<link rel="stylesheet" href="formulario.css">
</head>
<body>
	<div>
	<form name="edit" method="post" action="editAction.php">
	<h2>Editar</h2>
	        <div>Novo nome:</div>
			<input type="text" class="input" name="name" value="<?php echo $name; ?>" required maxlength="40"><br><br>
			<div>Novo email:</div>
			<input type="text" name="email" value="<?php echo $email; ?>" required maxlength="40"><br><br>
			<div>Nova senha:</div>
			<input type="text" name="senha" value="<?php echo $senha; ?>" required maxlength="40"><br><br>
			<input type="hidden" name="id" value=<?php echo $id; ?>>
			<button class="button" type='submit' name="update" style="vertical-align:middle"><span>Update</span></button><br>
			<p>
	        <a href="menu.php">Voltar</a>
            </p>
	</form>
	</div>
</body>
</html>