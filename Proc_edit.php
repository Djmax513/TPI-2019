<?php
session_start();

include_once("Conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
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

$altera = "UPDATE /*nome da tabela*/ SET nome='$nome', email='$email', telefone='$fone', sexo='$sexo', ocupacao='$ocupacao' WHERE /*campo ID da tabela*/='$id')";

$resultado = mysqli_query($conn, $altera);

if (mysql_affected_rows()($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário alterado com sucesso!</p>";
	header("Location: oConsulta.php");
}
else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi alterado com sucesso.</p>";
	header("Location: Editar.php?id=$id");
}