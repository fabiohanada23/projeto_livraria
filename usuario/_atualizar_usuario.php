<?php

include 'conexao.php';

$id = $_POST['id'];
//$nrousuario = $_POST['nrousuario'];
$nome = $_POST['nome'];
$datanasc = $_POST['datanasc'];
$escolaridade= $_POST['escolaridade'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$genero = $_POST['genero'];
$email = $_POST['email'];


$sql = "UPDATE `usuario` SET `nome`='$nome',`datanasc`='$datanasc',`escolaridade`='$escolaridade',`endereco`='$endereco',`telefone`=$telefone,`genero`='$genero',`email`='$email' WHERE id_usuario = $id";

$atualizar = mysqli_query($conexao,$sql);

?>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

<div class="container" style="width: 400px">
	
	<center>
		<h3>Atualizado com sucesso</h3>
		<div style="margin-top: 10px">
			<a href="listar_usuarios.php" class="btn btn-sm btn-warning" style="color: #fff">Voltar</a>
		</div>
	</center>

</div>