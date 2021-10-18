<?php

include 'conexao.php';

$id = $_POST['id'];
//$nrolivro = $_POST['nrolivro'];
$nomelivro = $_POST['nomelivro'];
$autor = $_POST['autor'];
$tema = $_POST['tema'];
$publicacao = $_POST['publicacao'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];


$sql = "UPDATE `livro` SET `nomelivro`='$nomelivro',`autor`='$autor',`tema`='$tema',`publicacao`='$publicacao',`quantidade`=$quantidade WHERE id_livro = $id";

$atualizar = mysqli_query($conexao,$sql);

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container" style="width: 400px">
	
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="listar_livros.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
		</div>
	</center>

</div>