<?php
if(!$_SESSION['name'] || !$_SESSION['email'] || !$_SESSION['senha']) {
	header('Location: index.php');
	exit();
}
?>