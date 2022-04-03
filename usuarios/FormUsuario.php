<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
	<h1>Insira seus dados</h1>
	<form method="post" action="insert_usu.php"> 
		<div class="form-group">
			<div class="form-group">
				<label>Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome: " autocomplete="off">    
			</div>
		</div>
		<div class="form-group">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" id="email" name="email" placeholder="Digite o email: " autocomplete="off">    
			</div>
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Password</label>
			<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="senha">
		</div>

		
		<button type="submit" class="btn btn-primary">Cadastrar</button>
	</form>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>