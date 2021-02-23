<?php
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	
	include 'conecta_mysql.php'; 
	
	 $sql = "SELECT * FROM usuarios WHERE login='$login' AND senha='$senha'";
	 $result = $conn->query($sql);
	 if($result->num_rows==0)
	{
		echo "<html><body>";
		echo "<p align=\"center\">A senha está errada</p>";
		echo "<p align=\"center\"><a href=\"index.php\">Voltar</a></p>";
		echo "</html></body>";
	}
	else
	{
		setcookie("login",$login);
		setcookie("senha",$senha);
		header("location:home.php");
}
$conn->close();
?>