<?php
	session_start();
	include_once ("Conexao.php");
	$codigo = "SELECT * FROM /*nome da tabela*/ WHERE /*ID = 1*/";
	$resultado = mysqli_query($conn, $codigo);
	$linhauser = mysqli_fetch_assoc($resultado); 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/cadastro.css">
	<meta charset="utf8">
	<title>Editar</title>
</head>
<body>
	<fieldset class="box"></fieldset>

	<form action="Proc_edit.php" method="POST">
		<center><h1 class="titulo">Editar Usuários</h1>
		<?php
			if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		<!-- aqui são os campos do formulario-->
		<input type="hidden" name="id" value="<?php echo $linhauser['']; ?>">
		<!-- Nesse input, vamos colocar o campo ID, para identificar qual usuario estamos alterando.-->
		<label class="label">Nome</label>
		<input class="campo" type="text" name="nome" value="<?php echo $linhauser['']; ?>" required><br> 
		<!-- Dentro dos conchetes, coloca nome do campo nome da tabela do banco de dados, e assim por diante-->
		<label class="label">Email</label>
		<input class="campo" type="email" name="email" value="<?php echo $linhauser['']; ?>" required><br>

		<label class="label">Fone</label>
		<input class="campo" type="tel" name="telefone" value="<?php echo $linhauser['']; ?>"><br>

		<label class="label">Sexo:</label>
		<input type="radio" name="sexo" value="<?php echo $linhauser['']; ?>"><h4>Masculino</h4>
		<input type="radio" name="sexo" value="<?php echo $linhauser['']; ?>"><h4>Feminino</h4>
		<input type="radio" name="sexo" value="<?php echo $linhauser['']; ?>"><h4>Indefinido</h4><br>

		<label class="label">Ocupação:</label>
		<input type="radio" name="ocupacao" value="<?php echo $linhauser['']; ?>"><h4>Professor</h4>
		<input type="radio" name="ocupacao" value="<?php echo $linhauser['']; ?>"><h4>Aluno</h4><br>

		<!-- botoes que vao direcionar para as outras paginas -->
		<button id="btn" type="submit">Editar</button>
		<button id="btn" type="reset">Limpar</button>
		<button><a href="oCadastro.php">Adicionar</a></button>
		<button><a href="oConsulta.php">Consultar</a></button>
		</center>
	</form>
</body>
</html>