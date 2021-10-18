<!DOCTYPE html>
<html>
<head>
	<title>Listagem de Livros</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<div class="container" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="menu.php" role="button" class="btn btn-primary">Voltar</a>
		</div>
		<h3>Lista de livros</h3>

		<br>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Nro Livro</th>
					<th scope="col">Nome Livro</th>
					<th scope="col">Autor</th>
					<th scope="col">Tema</th>
					<th scope="col">Publicacao</th>
					<th scope="col">Quantidade</th>
					<th scope="col">Acao</th>
				</tr>
			</thead>
			<?php
			include 'conexao.php';
			$sql = "SELECT * FROM `livro`";
			$busca = mysqli_query($conexao, $sql);

			while ($array = mysqli_fetch_array($busca)) {
				$id_livro = $array['id_livro'];
				$nrolivro = $array['nrolivro'];
				$nomelivro = $array['nomelivro'];
				$autor = $array['autor'];
				$tema = $array['tema'];
				$publicacao = $array['publicacao'];
				$quantidade = $array['quantidade'];
				?>
				<tr>
					<td><?php echo $nrolivro ?></td>
					<td><?php echo $nomelivro ?></td>
					<td><?php echo $autor ?></td>
					<td><?php echo $tema ?></td>
					<td><?php echo $publicacao ?></td>
					<td><?php echo $quantidade ?></td>
					<td><a class="btn btn-warning btn-sm" style="color: #fff" href="editar_livro.php?id=<?php echo $id_livro ?>" role="buttom"><i class="far fa-edit"></i>&nbsp; Editar</i></a>
						<a class="btn btn-danger btn-sm" style="color: #fff" href="deletar_livro.php?id=<?php echo $id_livro ?>" role="buttom"><i class="far fa-trash-alt"></i>&nbsp; Excluir</i></a>

					</td>

				</tr>	
			<?php } ?>		
		</table>

	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>