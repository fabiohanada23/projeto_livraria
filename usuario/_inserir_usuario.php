<?php

include 'conexao.php';

$nrousuario = $_POST['nrousuario'];
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$escolaridade= $_POST['escolaridade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$email = $_POST['email'];

$sql = "INSERT INTO `usuario`(`nrousuario`, `nome`, `datanasc`, `escolaridade`, `endereco`, `telefone`, `genero`, `email`) VALUES ($nrousuario,'$nome','$datanasc','$escolaridade','$endereco',$telefone,'$genero','$email')";

$inserir = mysqli_query($conexao, $sql);

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
	
	<center>
		<h4>Usuario adicionado com sucesso!</h4>
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo usuario</a>
		</center>
	</div>
</div>

