<?php
session_start();
require_once("dbConnection.php");

$name=mysqli_real_escape_string($mysqli,trim($_POST['name']));
$email=mysqli_real_escape_string($mysqli,trim($_POST['email']));
$senha=mysqli_real_escape_string($mysqli,trim($_POST['senha']));

$sql="select count(*) as total from contas where email='$email'";
$result=mysqli_query($mysqli,$sql);
$row=mysqli_fetch_assoc($result);

if($row['total']==1){
$_SESSION['usuario_cadastrado']=true;
header('location:cadastroAction.php');
exit;
}

$sql="insert into contas(name,email,senha)values('$name','$email','$senha')";

if($mysqli->query($sql)===true){
$_SESSION['status_cadastro']=true;
}

$mysqli->close();
header('location:index.php');
exit;
?>