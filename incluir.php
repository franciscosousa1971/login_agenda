<?php
	
include "conecta_mysql.php";

if($_POST) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	
$sql = "INSERT INTO usuarios (nome, email, login, senha)
VALUES ('$nome', '$email', '$login', '$senha')";

if ($conn->query($sql) === TRUE) {
	echo"<script language='javascript' type='text/javascript'>
    alert('Usuário cadastrado com sucesso!');window.location.
    href='home.php'</script>";
}else{
    echo"<script language='javascript' type='text/javascript'>
    alert('Não foi possível cadastrar esse usuário');window.location
    .href='usuario.php'</script>";
}
$conn->close();
}?>
