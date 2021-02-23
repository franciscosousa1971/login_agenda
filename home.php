<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lista de Usuários</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>

	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
	 <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

	<div class="container">
	<div class="col-lg-12">
	<br><br>
	<h1 class="text-warning text-center" >Lista de Usuários</h1>
	<a href="usuario.php" class="btn btn-success pull-right">Novo Usuário</a>
	<br>
	<table  id="tabledata" class=" table table-striped table-hover table-bordered">
	 
	<tr class="bg-dark text-white text-center">
 
		 <th> Nome </th>
		 <th> Email </th>
		 <th> Login </th>
		 <th> Excluir </th>

	</tr >

	 <?php

	 include 'conecta_mysql.php'; 
	 $sql = "select * from usuarios ";
	 $result = $conn->query($sql);
	 if($result->num_rows>0){
		while($res = $result->fetch_assoc()){
	 ?>
	 <tr class="text-center">
		 <td> <?php echo $res['nome'];  ?> </td>
		 <td> <?php echo $res['email'];  ?> </td>
		 <td> <?php echo $res['login'];  ?> </td>
		 <td> <button class="btn-danger btn"> <a href="excluir.php?id=<?php echo $res['id']; ?>" class="text-white"> Excluir </a>  </button> </td>
	</tr>

	 <?php 
	}
} else {
	echo "0 results";
}
$conn->close();
?>
 </table>  

 </div>
 </div>
	 <script type="text/javascript">
	 
	 $(document).ready(function(){
	 $('#tabledata').DataTable();
	 }) 
	 
	 </script>
</body>
</html>
