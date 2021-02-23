
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
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
		 
		 <form method="post" action="login.php">
		 
		 <br><br>
		 <div class="card">
		 
		 <div class="card-header bg-dark">
		 <h1 class="text-white text-center"> Login </h1>
		 </div><br>
			 <label> Login: </label>
			 <input type="text" name="login" class="form-control"> <br>
			 <label> Senha: </label>
			 <input type="password" name="senha" class="form-control"> <br>
			 <button class="btn btn-success" type="submit" name="submit"> Enviar </button><br>
		 </div>
		</form>
	 </div>
</body>
</html>