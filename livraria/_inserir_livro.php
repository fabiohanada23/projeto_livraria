<?php

include 'conexao.php';

$nrolivro = $_POST['nrolivro'];
$nomelivro = $_POST['nomelivro'];
$autor = $_POST['autor'];
$tema = $_POST['tema'];
$publicacao = $_POST['publicacao'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];

$sql = "INSERT INTO `livro`( `nrolivro`, `nomelivro`, `autor`, `tema`, `publicacao`, `quantidade`) VALUES ($nrolivro,'$nomelivro','$autor','$tema','$publicacao' ,$quantidade)";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container" style="width: 500px; margin-top: 20px">
	
	<center>
		<h4>Livro adicionado com sucesso!</h4>
	</center>
	<div style="padding-top: 20px">
		<center>
			<a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo livro</a>
		</center>
	</div>
</div>