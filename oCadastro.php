<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/cadastro.css">
	<meta charset="utf8">
	<title>Cadastre-se!</title>
</head>
<body>

	<fieldset class="box"></fieldset>

	<form action="Processa.php" method="POST">
		<center><h1 class="titulo">Insira suas Informações</h1>
		<?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<!-- aqui são os campos do formulario-->
		<label class="label">Nome</label>
		<input class="campo" type="text" name="nome" required><br>

		<label class="label">Email</label>
		<input class="campo" type="email" name="email" required><br>

		<label class="label">Fone</label>
		<input class="campo" type="tel" name="telefone"><br>

		<label class="label">Sexo:</label>
		<input type="radio" name="sexo" value="masculino"><h4>Masculino</h4>
		<input type="radio" name="sexo" value="feminino"><h4>Feminino</h4>
		<input type="radio" name="sexo" value="indefinido"><h4>Indefinido</h4><br>

		<label class="label">Ocupação:</label>
		<input type="radio" name="ocupacao" value="professor"><h4>Professor</h4>
		<input type="radio" name="ocupacao" value="aluno"><h4>Aluno</h4><br>

		<!-- botoes que vao direcionar para as outras paginas -->
		<button id="btn" type="submit">Cadastrar</button>
		<button id="btn" type="reset">Limpar</button>
		</center>
	</form>
</body>
</html>