<?php
session_start();

include_once("Conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$fone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$ocupacao = filter_input(INPUT_POST, 'ocupacao', FILTER_SANITIZE_STRING);

// Estou exibindo o valor das variaveis com o código abaixo.
/*echo "Nome: $nome <br>";
echo "E-mail: $email <br>";
echo "Telefone: $fone <br>";
echo "Sexo: $sexo <br>";
echo "Ocupação: $ocupacao <br>";*/

$insere = "INSERT INTO /*nome da tabela*/ (nome, email, telefone, sexo, ocupacao) 
VALUES ('$nome', '$email', '$fone', '$sexo', '$ocupacao')";

$resultado = mysqli_query($conn, $insere);

if (mysql_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
	header("Location: oCadastro.php");
}
else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso.</p>";
	header("Location: oCadastro.php");
}