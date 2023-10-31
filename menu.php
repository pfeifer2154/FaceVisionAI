<?php
session_start();
include('verifica.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="principal.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>FaceVisionAI</title>
</head>

<body>
<div id='inicio'>
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <h3>FaceVisionAI</h3>
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Tutorial</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-analise-tab" data-bs-toggle="pill" data-bs-target="#pills-analise" type="button" role="tab" aria-controls="pills-analise" aria-selected="false">IA</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Conta</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
  <br><br><br><br><br><br>

<div class='container'>
<img src="img/musculosf.png" width='400' height='300' align='left' alt=""><br><br><br><br>
<h2>Olá, <?php echo $_SESSION['nome'];?></h2>
<p>Seja muito bem vindo ao FaceVisionAI app, um aplicativo onde o objetivo é análisar <br>
expressões faciais para saber se uma pessoa gostou de um produto sim ou não, ele tambem serve para <br>
saber que tipo de emoção uma pessoa está expressando.</p>
</div>
  </div>

  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
  <div id='tutorial'>
  Tutorial
  </div>
  </div>
  <div class="tab-pane fade" id="pills-analise" role="tabpanel" aria-labelledby="pills-analise-tab" tabindex="0">
  <div id='analise'>

<script src="https://cdn.jsdelivr.net/npm/brain.js"></script>
<script src="Ia.js"></script>
  
<div id='iaf'>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Primeiro valor:</span>
  <input type="text" class="form-control" id='input1' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<br>
<div class="input-group input-group-lg">
  <span class="input-group-text" id="inputGroup-sizing-lg">Segundo valor:</span>
  <input type="text" class="form-control" id='input2' aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
</div>
<br>
<button class="btn btn-primary" onclick="calcular()">Calcular</button>
<br><br>
</div>
<h2 id="resultado"></h2>
  </div>
  </div>

  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
  <div id='conta'>
  <button type="button" class="botao botao-com-animacao">Mudar senha</button><br>
  <a href="excluir_conta.php"><button type="button" class="botao botao-com-animacao">Excluir conta</button></a><br>
  <a href="logout.php"><button type="button" class="botao botao-com-animacao">Sair</button></a>
  </div>
</div>
</div>
</body>
</html>