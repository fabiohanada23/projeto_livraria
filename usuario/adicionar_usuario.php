<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Formulario de Cadastro</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<style type="text/css">
		
		#tamanhoContainer {
			width: 500px;
		}

		#botao {
			background-color: #FF1168;
			color: #ffffff;
		}

	</style>

</head>
<body>
	<div class="container" id="tamanhoContainer" style="margin-top: 40px">
		<div style="text-align: right;">
			<a href="menu2.php" role="button" class="btn btn-primary">Voltar</a>
		</div>
		<center>
		<h4>Formulario de Cadastro</h4>
		</center>
		<form action="_inserir_usuario.php" method="post" style="margin-top: 20px">
			<div class="form-group">
				<label>Nro Usuario</label>
				<input type="number" class="form-control" name="nrousuario" placeholder="Insira no numero do usuario" autocomplete="off" required>	
			</div>
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" name="nome" placeholder="Insira o seu nome" autocomplete="off" required>	
			</div>
			<div class="form-group">
				<label>Data Nascimento</label>
				<input type="date" class="form-control" name="datanasc" placeholder="Insira a data de nascimento" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Grau de escolidade</label>
				<select class="form-control" name="escolaridade">
					<option>--Selecione sua escolaridade--</option>
					<option>Fundamental</option>
					<option>Medio</option>
					<option>Superior</option>
				</select>
			</div>
			<div class="form-group">
				<label>Endereco</label>
				<input type="text" class="form-control" name="endereco" placeholder="Insira o seu endereco" autocomplete="off" required>	
			</div>
			<div class="form-group">
				<label>Telefone</label>
				<input type="number" class="form-control" name="telefone" placeholder="Insira o seu numero" autocomplete="off" required>	
			</div>
			<div class="form-group">
				<label>Genero</label>
				<select class="form-control" name="genero">
					<option>--Selecione o seu genero--</option>
					<option>Maculino</option>
					<option>Feminino</option>
				</select>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" class="form-control" name="email" placeholder="Insira seu email" autocomplete="off" required>	
			</div>
			<div style="text-align: right;">
				
				

			<button type="submit" id="botao" class="btn btn-sm" >Cadastrar</button>
			</div>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>