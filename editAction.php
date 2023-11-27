<?php

require_once("dbConnection.php");

if (isset($_POST['update'])) {

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$senha = mysqli_real_escape_string($mysqli, $_POST['senha']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
		
		$result = mysqli_query($mysqli, "UPDATE contas SET `name` = '$name', `senha` = '$senha', `email` = '$email' WHERE `id` = $id");
		
		echo "<p><font color='green'>Updated feito com sucesso!</p>";
		echo "<a href='menu.php'>Ver resultado</a>";
	}