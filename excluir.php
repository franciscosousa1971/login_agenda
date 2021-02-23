<?php

include 'conecta_mysql.php';

$id = $_GET['id'];

$sql = " DELETE FROM usuarios WHERE id = $id ";

if ($conn->query($sql) === TRUE) {
	 echo"<script language='javascript' type='text/javascript'>
          alert('Usuário excluído com sucesso!');window.location.
          href='home.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>
          alert('Não foi possível excluir esse usuário');window.location
          .href='home.php'</script>";
}
$conn->close();

?>
