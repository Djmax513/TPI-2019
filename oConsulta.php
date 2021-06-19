<?php
	session_start();
	include_once("Conexao.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="style/consulta.css">
		<meta charset="utf8">
		<title>Consulta!</title>
	</head>
	<body>
		<form method="POST">
			<center><h1 id="titulo">Consulta</h1>
			<?php
				if (isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
				}
				//
				// Receber o número da pagina.
				$pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);

				$pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

				// Setar a quantidade de itens por pagina.
				$qnt_result_pg = 2;

				// Calcular o inicio da visualização.
				$inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
				//
				$verifica = "SELECT * FROM /*nome da tabela*/ /*LIMIT $inicio, $qnt_result_pg*/";
				$verificafinal = mysqli_query($conn, $verifica);

				while ($linhausuario = mysqli_fetch_assoc($verificafinal)){
					echo ":" . $linhausuario[''] . "<br>"; 
					/*Tem que colocar o nome da coluna que você quer consultar. Provavelmente vai começar com "ID".*/
					echo "Nome: " . $linhausuario[''] . "<br>";
					echo "E-mail: " . $linhausuario[''] . "<br>";
					echo "Telefone: " . $linhausuario[''] . "<br>";
					echo "Sexo: " . $linhausuario[''] . "<br>";
					echo "Ocupação: " . $linhausuario[''] . "<br><hr>"; 
					/*Colocando o nome das colunas dentro das aspas simples para listar.*/
				}
			?>
			<div class="btn">
				<button><a href="oCadastro.php">Adicionar</a></button>
				<button><a href="Editar.php">Editarr</a></button>
				<button><a href="excluir.html">Excluir</a></button>
			</div></center>
		</form>
	</body>
</html>