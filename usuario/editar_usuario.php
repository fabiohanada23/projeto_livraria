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
		<form action="_atualizar_usuario.php" method="post" style="margin-top: 20px">
			<?php

			$sql ="SELECT * FROM `usuario` WHERE id_usuario = $id";
			$buscar = mysqli_query($conexao, $sql);
			while ($array = mysqli_fetch_array($buscar)) {
				$id_usuario = $array['id_usuario'];
				$nrousuario = $array['nrousuario'];
				$nome = $array['nome'];
				$datanasc = $array['datanasc'];
				$escolaridade = $array['escolaridade'];
				$endereco = $array['endereco'];
				$telefone = $array['telefone'];
				$genero = $array['genero'];
				$email = $array['email'];
				?>
				<div class="form-group">
				<label>Nro Usuario</label>
				<input type="number" class="form-control" name="nrousuario" value="<?php echo $nrousuario ?>" disabled>
				<input type="number" class="form-control" name="id" value="<?php echo $id ?>" style="display: none;" >		
			</div>
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome" value="<?php echo $nome ?>">	
			</div>
			<div class="form-group">
				<label>Data Nascimento</label>
				<input type="date" class="form-control" name="datanasc" value="<?php echo $datanasc ?>">
			</div>
			<div class="form-group">
				<label>Grau de escolidade</label>
				<select class="form-control" name="escolaridade" >
					<option>Fundamental</option>
					<option>Medio</option>
					<option>Superior</option>
				</select>
			</div>
			<div class="form-group">
				<label>Endereco</label>
				<input type="text" class="form-control" name="endereco" value="<?php echo $endereco ?>">	
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="number" class="form-control" name="telefone" value="<?php echo $telefone ?>">	
			</div>
			<div class="form-group">
				<label>Genero</label>
				<select class="form-control" name="genero" >
					<option>Maculino</option>
					<option>Feminino</option>
				</select>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email" value="<?php echo $email ?>">	
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