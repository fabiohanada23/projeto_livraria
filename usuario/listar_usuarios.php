<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Usuarios</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="menu2.php" role="button" class="btn btn-primary">Voltar</a>
		</div>
		<h3>Lista de Usuarios</h3>

		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nro Usuario</th>
					<th scope="col">Nome</th>
					<th scope="col">Data Nascimento</th>
					<th scope="col">Escolaridade</th>
					<th scope="col">Endereço</th>
					<th scope="col">Telefone</th>
					<th scope="col">Genero</th>
					<th scope="col">Email</th>
					<th scope="col">Acao</th>
				</tr>
			</thead>
			<?php
			include 'conexao.php';
			$sql = "SELECT * FROM `usuario`";
			$busca = mysqli_query($conexao, $sql);

			while ($array = mysqli_fetch_array($busca)) {
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
				<tr>
					<td><?php echo $nrousuario ?></td>
					<td><?php echo $nome ?></td>
					<td><?php echo $datanasc ?></td>
					<td><?php echo $escolaridade ?></td>
					<td><?php echo $endereco ?></td>
					<td><?php echo $telefone ?></td>
					<td><?php echo $genero ?></td>
					<td><?php echo $email ?></td>
					<td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_usuario.php?id=<?php echo $id_usuario ?>" role="buttom"><i class="far fa-edit"></i>&nbsp; Editar</i></a>
						<a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_usuario.php?id=<?php echo $id_usuario ?>" role="buttom"><i class="far fa-trash-alt"></i>&nbsp; Excluir</i></a>

					</td>

				</tr>	
			<?php } ?>		
		</table>

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>