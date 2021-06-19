<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<title>Bem vindo!</title>
</head>
<body>
<fieldset id="box"></fieldset>
<form class="loginBox" action="login.php" method="POST">
	<h1 id="titulo">LOGIN</h1>
	<label>Nome</label>
	<input type="text" name="nome" required><br>
	<label>Senha</label>
	<input type="password" name="senha" required><br>
	<button type="submit" class="btn">Entrar</button>
	<button class="btn"><a href="consulta.html">Consultar</a></button><br>
	<center><a href="restore_account.html" id="link">Esqueceu sua senha?</a></center>
</form>
</body>
</html>