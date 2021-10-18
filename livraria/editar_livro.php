<?php

include 'conexao.php';

$id = $_GET['id'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style type="text/css">
		#tamanhoContainer{
			width: 500px;
		}

		#botao{
			background-color: #FF1168;  /*cor de fundo*/
			color: #ffffff;
		}

	</style>
</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<h4>Formulario de Cadastro</h4>
		<form action="_atualizar_livro.php" method="post" style="margin-top: 20px">
			<?php

			$sql ="SELECT * FROM `livro` WHERE id_livro = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_livro = $array['id_livro'];
				$nrolivro = $array['nrolivro'];
				$nomelivro = $array['nomelivro'];
				$autor = $array['autor'];
				$tema = $array['tema'];
				$publicacao = $array['publicacao'];
				$quantidade = $array['quantidade'];
				?>
				<div class="form-group">
				<label>Nro Livro</label>
				<input type="number" class="form-control" name="nrolivro" value="<?php echo $nrolivro ?>" disabled>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;" >	
			</div>
			<div class="form-group">
				<label>Nome Livro</label>
				<input type="text" class="form-control" name="nomelivro" value="<?php echo $nomelivro ?>">	
			</div>
			<div class="form-group">
				<label>Nome Autor</label>
				<input type="text" class="form-control" name="autor" value="<?php echo $autor ?>">	
			</div>
			<div class="form-group">
				<label>Tema</label>
				<input type="text" class="form-control" name="tema" value="<?php echo $tema ?>">	
			</div>
			<div class="form-group">
				<label>Data publicação</label>
				<input type="date" class="form-control" name="publicacao" value="<?php echo $publicacao ?>">	
			</div>
			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="categoria">
					<option>--Selecione a categoria--</option>
					<option>Poesia</option>
					<option>Romance</option>
					<option>Horror</option>
					<option>Ficção</option>
					<option>Fantasia</option>
				</select>
			</div>
			<div class="form-group">
				<label>Quantidade de copias</label>
				<input type="number" class="form-control" name="quantidade" value="<?php echo $quantidade ?>">	
			</div>
			<div style="text-align: right;">
			<button type="submit" id="botao" class="btn btn-sm" >Atualizar</button>
			</div>
			<?php } ?>
			</form>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	</body>
	</html>