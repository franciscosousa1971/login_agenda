<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
	</script>
</head>
<body>

	<div class="col-lg-6 m-auto">
		 
		 <form method="post" action="incluir.php">
		 
		 <br><br>
		 <div class="card">
		 
		 <div class="card-header bg-dark">
		 <h1 class="text-white text-center"> Cadastro </h1>
		 </div><br>
			 <label> Nome: </label>
			 <input type="text" name="nome" class="form-control"> <br>
			 <label> Email: </label>
			 <input type="text" name="email" class="form-control"> <br>
			 <label> Login: </label>
			 <input type="text" name="login" class="form-control"> <br>
			 <label> Senha: </label>
			 <input type="password" name="senha" class="form-control"> <br>
			 <button class="btn btn-success" type="submit" name="submit"> Salvar </button><br>
		 </div>
		</form>
	 </div>
</body>
</html>