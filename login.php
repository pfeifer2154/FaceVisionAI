<?php
session_start();
include('dbConnection.php');

$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);

$query = "select name from contas where email = '{$email}' and senha = ('{$senha}')";
$result = mysqli_query($mysqli, $query);
$row = mysqli_num_rows($result);

if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['name'] = $usuario_bd['name'];
	$_SESSION['id'] = $id;
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;
	header('Location: menu.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}